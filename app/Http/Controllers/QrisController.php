<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Helpers\JWT;
use App\Helpers\Logger;
use Exception;
use Illuminate\Support\Str;

class QrisController extends Controller
{
    public function generate(Request $request)
    {
        $createdTime = $request->query('createdTime');
    
        if (is_null($createdTime) || $createdTime <= 0) {
            return response()->json(['success' => false, 'message' => 'createdTime tidak valid']);
        }
    
        $row = DB::table('users')->where('created_time', $createdTime)->first();
    
        if ($row) {
            $data = [
                "accountNo" => "5080010295",
                "amount" => strval($row->tagihan),
                "mitraCustomerId" => "ISLAMIC CENTER SMG451061",
                "transactionId" => strval($row->created_time),
                "tipeTransaksi" => "MTR-GENERATE-QRIS-DYNAMIC",
                "vano" => strval($row->va_number)
            ];
    
            $secretKey = 'TokenJWT_BMI_ICT';
            $jwtToken = JWT::encode($data, $secretKey);
    
            $url = 'http://10.99.23.111/qris/SEMARANG_WALISONGO/server.php?token=' . urlencode($jwtToken);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
            ]);

            $response = curl_exec($ch);
    
            if (curl_errno($ch)) {
                $error = curl_error($ch);
                curl_close($ch);
                Logger::log('Generate QRIS', $data, null, $error); // Log error
                return response()->json(['success' => false, 'message' => 'cURL Error: ' . $error]);
            }
    
            curl_close($ch);
    
            $responseData = json_decode($response, true);
            Logger::log('Generate QRIS', $data, $responseData, 'success'); // Log sukses
    
            if (isset($responseData['transactionDetail']['transactionQrId'])) {
                $transactionQrId = $responseData['transactionDetail']['transactionQrId'];
                DB::table('users')->where('created_time', $createdTime)->update(['transaction_qr_id' => $transactionQrId]);
    
                $responseData['transactionQrId'] = $transactionQrId;
            } else {
                return response()->json(['success' => false, 'message' => 'Transaction QR ID tidak ditemukan dalam response']);
            }

            if (isset($responseData['transactionDetail']['rawQrData'])) {
                return view('qris')->with([
                    'qrData' => $responseData['transactionDetail']['rawQrData'],
                    'createdTime' => $responseData['transactionId']
                ]);
            } else {
                return response()->json(['success' => false, 'message' => 'QR Data tidak ditemukan']);
            }
                        
    
            return response()->json($responseData);
        }
    
        return response()->json(['success' => false, 'message' => 'Data tidak ditemukan']);
    }

    public function checkStatus(Request $request)
    {
        $createdTime = $request->query('createdTime');
    
        if (is_null($createdTime) || $createdTime <= 0) {
            return response()->json(['success' => false, 'message' => 'createdTime tidak valid']);
        }
    
        $row = DB::table('users')->where('created_time', $createdTime)->first();
    
        if ($row) {
            $dataCheckStatus = [
                "accountNo" => "5080010295",
                "amount" => strval($row->tagihan),
                "merchantId" => "736150800102952",
                "mitraCustomerId" => "ISLAMIC CENTER SMG451061",
                "transactionId" => $createdTime,
                "transactionQrId" => $row->transaction_qr_id,
                "tipeTransaksi" => "MTR-CHECK-STATUS"
            ];
    
            $secretKey = 'TokenJWT_BMI_ICT';
            $jwtTokenCheckStatus = JWT::encode($dataCheckStatus, $secretKey);
    
            $url = 'http://10.99.23.111/qris/SEMARANG_WALISONGO/server.php?token=' . urlencode($jwtTokenCheckStatus);
    
            $chCheckStatus = curl_init($url);
            curl_setopt($chCheckStatus, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($chCheckStatus, CURLOPT_POST, true);
            curl_setopt($chCheckStatus, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
            ]);

            $responseCheckStatus = curl_exec($chCheckStatus);

            if (curl_errno($chCheckStatus)) {
                $error = curl_error($chCheckStatus);
                curl_close($chCheckStatus);
                Logger::log('Check Status Qris', $dataCheckStatus, null, $error); // Log sukses
                return response()->json(['success' => false, 'message' => 'cURL Error: ' . $error]);
            }
    
            curl_close($chCheckStatus);
    
            // Decode respons
            $responseDataCheckStatus = json_decode($responseCheckStatus, true);
            Logger::log('Check Status QRIS', $dataCheckStatus, $responseDataCheckStatus, 'success'); // Log sukses
    
            return response()->json($responseDataCheckStatus);
        }
    
        return response()->json(['success' => false, 'message' => 'Data tidak ditemukan']);
    }

    public function pushNotification(Request $request)
{
    $token = $request->input('token');

    if (empty($token)) {
        Logger::log('Push Notification', $request->all(), null, 'Token tidak ditemukan');
        return response()->json([
            'responseCode' => '01',
            'responseMessage' => 'Token tidak ditemukan',
            'responseTimestamp' => now()
        ]);
    }

    $secretKey = 'TokenJWT_BMI_ICT';

    try {
        $decoded = JWT::decode($token, $secretKey, ['HS256']);

        $responseCode = $decoded->responseCode;
        $responseMessage = $decoded->responseMessage;
        $responseTimestamp = $decoded->responseTimestamp;
        $transactionId = $decoded->transactionId;
        $data = $decoded->data;

        if ($responseCode === '00') {
            $vano = $data->vano1 ?? $data->vano;
            $amount = $data->amount;
            $accountNo = $data->accountNo;
            $transactionQrId = $data->transactionQrId;
            $description = $data->description;

            $billing = DB::table('users')->where('transaction_qr_id', $transactionQrId)->first();

            if ($billing) {

                DB::table('users')->where('transaction_qr_id', $transactionQrId)->update(['lunas' => 1]);

                // $for_ict = ($amount < 100000) ? $amount * 0.025 : 3000;

                DB::table('transaksi')->insert([
                    'user_id' => $billing->id,
                    'transaksi' => $amount,
                    'for_ict' => 0,
                    'tanggal_transaksi' => now(),
                    'va_number' => $vano,
                    'method' => 'QRIS',
                    'transaction_qr_id' => $transactionQrId,
                    'created_time' => $billing->created_time,
                    'lunas' => 1,
                ]);

                $servernamelog = '10.99.23.20';
                $usernamelog = 'root';
                $passwordlog = 'Smartpay1ct';
                $databaselog = 'farrelep_broadcaster';
                
                $dbTraffic = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);
                    if ($dbTraffic->connect_errno) {
                        echo json_encode("Failed to connect to MySQL: " . $dbTraffic->connect_error);
                        exit();
                    }
                
                $CUSTNM = 'SEMARANG_WALISONGO';
                $NOMINALFee1 = (int) round($amount * 0.007, 0, PHP_ROUND_HALF_UP); // Biaya QRIS
                $NOMINALFee2 = 0; // Biaya Admin ICT
                $GetValue = (string) ($amount + $NOMINALFee1 + $NOMINALFee2); // Nominal Gabungan
                $accountNoLog = '5080010295'; // Account No QRIS
                $mitraCustomerId = 'ISLAMIC CENTER SMG451061'; // Mitra ID
                $vanoLog = $vano ?? '-';
                $transactionIdLog = $data->transactionId;
                $transactionQrIdLog = $transactionQrId;
                
                $queryLog = "CALL LogPaymentQR ('" . $CUSTNM . "', '" . $mitraCustomerId . "' , '" . $accountNoLog . "' , '" . $transactionIdLog . "', '" . $transactionId . "' , '" . $transactionQrIdLog . "' , '" . $vanoLog . "' , '" . $GetValue . "' ,'" . $amount . "' ,'" . $NOMINALFee1 . "' ,'" . $NOMINALFee2 . "' ,'" . $token . "','-')";
                $dbTraffic->query($queryLog);

                Logger::log('Push Notification', $request->all(), [
                    'responseCode' => '00',
                    'responseMessage' => 'TRANSACTION SUCCESS',
                    'transactionId' => $transactionId
                ]);

                return response()->json([
                    'responseCode' => '00',
                    'responseMessage' => 'TRANSACTION SUCCESS',
                    'responseTimestamp' => now(),
                    'transactionId' => $transactionId
                ]);
            }

            Logger::log('Push Notification', $request->all(), null, 'Billing data not found');
            return response()->json([
                'responseCode' => '01',
                'responseMessage' => 'Billing data not found',
                'responseTimestamp' => now()
            ]);
        } else {
            Logger::log('Push Notification', $request->all(), null, $responseMessage);
            return response()->json([
                'responseCode' => '01',
                'responseMessage' => $responseMessage,
                'responseTimestamp' => now()
            ]);
        }
    } catch (Exception $e) {
        Logger::log('Push Notification', $request->all(), null, $e->getMessage());
        return response()->json([
            'responseCode' => '01',
            'responseMessage' => 'Invalid token or data: ' . $e->getMessage(),
            'responseTimestamp' => now()
        ]);
    }
}
       
}
