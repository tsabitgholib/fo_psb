<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            color: #333;
            padding-top: 1rem; /* Spasi atas */
        }

        /* Container for the media gallery */
        .media-gallery {
            width: 100%;
            max-width: 450px; /* Max width for larger screens */
            background-color: #ffffff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            height: 80vh; /* Adjust height */
            overflow-y: auto; /* Enable vertical scrolling */
            padding: 1rem;
        }

        .media-gallery img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 1rem; /* Space between images */
        }

        /* Footer section */
        footer {
            text-align: center;
            font-size: 0.9rem;
            color: #888888;
            margin-top: 1.5rem;
        }

        /* Navbar placement */
        .navbar {
            margin-top: 1rem;
        }
        
        /* Mobile specific styling */
        @media (max-width: 768px) {
            .media-gallery {
                max-width: 100%; /* Full width on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="media-gallery">
        <!-- Tampilkan media satu per satu -->
        @foreach ($mediaUrls as $index => $mediaUrl)
            <img src="{{ $mediaUrl }}" alt="Media {{ $index + 1 }}">
        @endforeach
            <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Support By: PT.Inovasi Cipta Teknologi.</p>
    </footer>
    </div>

    <!-- Navbar -->
    @include('components.navbar')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
