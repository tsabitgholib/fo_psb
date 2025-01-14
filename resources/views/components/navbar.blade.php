<style>
    .fixed {
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 35%; /* Default untuk desktop */
        text-align: center;
        font-size: 0.875rem;
        color: #888888;
        padding: 1rem;
    }

    @media (max-width: 768px) {
        .fixed {
            width: 100%; /* Menyesuaikan dengan lebar perangkat Android atau layar kecil */
            left: 0;
            right: 0;
            transform: none; /* Hilangkan translateX untuk memastikan elemen tetap berada di tengah layar */
        }
    }

        /* Floating button styling */
        .floating-button {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background-color: #f39c12;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: box-shadow 0.3s ease;
        }

        .floating-button:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .floating-button svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }

        /* Background shape */
        .background-shape {
            position: absolute;
            z-index: -1;
            bottom: 0;
            height: 80%;
            background-color: #fff;
            transform: translateX(-50%);
            left: 50%;
            width: 55%;
            border-radius: 50%;
        }
</style>

<div class="fixed">
            <div class="relative grid h-24 w-full mx-auto grid-cols-2 gap-20 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1)]">
                <!-- Card 1 -->
                <div class="relative z-10 flex flex-col items-center justify-center rounded-l-lg rounded-r-[2rem] bg-white">
                    <a href="/" class="transition hover:text-blue-900 active:-translate-y-1 active:underline underline-offset-4 flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-10 w-10 mb-2" fill="currentColor">
                            <path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM112 256l160 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-160 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l160 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-160 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l160 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-160 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="text-wrap">Daftar Sekarang</span>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="relative z-10 flex flex-col items-center justify-center rounded-l-[2rem] rounded-r-lg bg-white">
                    <a href="https://wa.me/6289667011213" class="transition hover:text-blue-900 active:-translate-y-1 active:underline underline-offset-4 flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-2" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                        <span>Hubungi kami</span>
                    </a>
                </div>
            </div>

            <!-- Floating Button -->
            <div class="floating-button">
                <a href="/media" class="hover:text-blue-900 transition text-white duration-200 active:-translate-y-1 flex items-center justify-center rounded-full w-full h-full bg-gradient-to-br from-yellow-600 to-yellow-400 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 576 512">
                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                </a>
            </div>

            <!-- Background Shape -->
            <div class="background-shape"></div>
        </div>

        <script src="https://cdn.tailwindcss.com"></script>