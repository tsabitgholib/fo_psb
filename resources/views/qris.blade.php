<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Display</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body>
    <h2>Scan QR Code</h2>
    <div id="qrcode"></div>

    <script>
        // Data QR dari respons
        var rawQrData = "00020101021226740022ID.CO.BANKMUAMALAT.WWW011893600147240012314102157361508001029520303URE51440014ID.CO.QRIS.WWW0215ID20253706659240303URE5204736153033605405900005502015802ID5914ISLAMIC CENTER6013KOTA SEMARANG61055027362160712A0171480423A63041EB";
        
        // Generate QR Code
        new QRCode(document.getElementById("qrcode"), {
            text: rawQrData,
            width: 256,
            height: 256
        });
    </script>
</body>
</html>
