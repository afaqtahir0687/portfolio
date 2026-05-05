<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Muhammad Afaq Tahir - Professional PHP Laravel Developer with 2+ years of experience building secure and scalable web applications." />
    <meta name="keywords"
        content="Laravel Developer, PHP Developer, Full Stack Developer, Afaq Tahir, Web Development, MeemSoft" />
    <meta name="author" content="Muhammad Afaq Tahir" />
    <title>Muhammad Afaq Tahir | Sr. Laravel Developer</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
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

    <script>
        // Scroll Reveal Animation
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        // To check the scroll position on page load
        reveal();
    </script>

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/923017730687?text=Hello%20Afaq%20Tahir" target="_blank" class="whatsapp-float"
        title="Chat on WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" title="Back to Top">
        <i class="bi bi-arrow-up"></i>
    </button>

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
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transition: transform 0.3s ease, background-color 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #128c7e;
            color: white;
        }

        .back-to-top {
            position: fixed;
            bottom: 100px;
            right: 30px;
            background-color: #1e30f3;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transition: opacity 0.3s, visibility 0.3s, transform 0.3s;
        }

        .back-to-top.show {
            display: flex;
        }

        .back-to-top:hover {
            transform: scale(1.1);
            background-color: #e21e80;
        }
    </style>
    <script>
        // Back to Top functionality
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>

</html>