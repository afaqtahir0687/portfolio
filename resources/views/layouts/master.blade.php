<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Afaq Tahir</title>

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            @include('layouts.navbar')
            @yield('content')
        </main>
       @include('layouts.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>

        <!-- Floating WhatsApp Icon -->
        <a href="https://wa.me/923017730687?text=Hello%20Afaq%20Tahir" target="_blank" class="whatsapp-float">
            <i class="bi bi-whatsapp"></i>
        </a>
        <style>
            .whatsapp-float {
                position: fixed;
                bottom: 30px;
                right: 30px;
                background-color: #25d366;
                color: white;
                border-radius: 50%;
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 30px;
                box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
                z-index: 1000;
                transition: transform 0.3s ease;
                text-decoration: none;
            }
            .whatsapp-float:hover {
                transform: scale(1.1);
                color: white;
            }
        </style>
    </body>
</html>
