<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jannatul Ferdous Riva - Portfolio</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS Variables -->
    <style>
        :root {
            --primary-color: #FF69B4;
            --secondary-color: #FFB6C1;
            --accent-color: #FF1493;
            --text-color: #333;
            --light-pink: #FFF0F5;
        }

        /* Base Styles */
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-color);
        }

        /* Common Utility Classes */
        .text-pink {
            color: var(--primary-color) !important;
        }

        .bg-pink {
            background-color: var(--primary-color) !important;
        }

        .btn-outline-pink {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-pink:hover {
            color: white;
            background-color: var(--primary-color);
        }

        .btn-pink {
            color: white;
            background-color: var(--primary-color);
        }

        .btn-pink:hover {
            color: white;
            background-color: var(--accent-color);
        }
    </style>

    <!-- Stack Styles -->
    @stack('style')
</head>
<body>
    <!-- Main Content -->
    @yield('main-content')

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Add active class to current navigation item
        document.addEventListener('DOMContentLoaded', function() {
            const currentLocation = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentLocation) {
                    link.classList.add('active');
                }
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 105, 180, 1) !important';
            } else {
                navbar.style.background = 'rgba(255, 105, 180, 0.95) !important';
            }
        });
    </script>

    <!-- Stack Scripts -->
    @stack('scripts')
</body>
</html>
