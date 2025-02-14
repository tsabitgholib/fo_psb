<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

@if ($message)
    <script>
        let bgColor = "{{ $type === 'success' ? 'green' : ($type === 'error' ? 'red' : 'orange') }}";

        Toastify({
            text: "{{ $message }}",
            duration: 3000,
            gravity: "top",
            position: "center",
            backgroundColor: bgColor,
            className: "custom-toast",
            stopOnFocus: true,


        }).showToast();
    </script>
    <style>
        .custom-toast {
            top: 5% !important;
            left: 30% !important;
            transform: translateX(-50%) !important;
            border-radius: 5px !important;
            /* Bikin toast rounded */
            padding: 10px 20px !important;
            /* Biar lebih rapi */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2) !important;
            /* Efek bayangan */
            background: rgba(255, 255, 255, 0.9);
            position: relative;
            overflow: hidden;
        }

        /* Progress Bar */
        .custom-toast::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.7);
            /* Warna progress bar */
            animation: progressBar 3s linear forwards;
        }

        @keyframes progressBar {
            from {
                width: 100%;
            }

            to {
                width: 0%;
            }
        }
    </style>
@endif
