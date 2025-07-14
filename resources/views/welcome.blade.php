@extends('index')
@push('style')
<style>
    :root {
        --primary-color: #FF69B4;
        --secondary-color: #FFB6C1;
        --accent-color: #FF1493;
        --text-color: #333;
        --light-pink: #FFF0F5;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--text-color);
        background-color: #fff;
        overflow-x: hidden;
    }

    .hero-section {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        width: 200%;
        height: 200%;
        background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        opacity: 0.5;
        animation: move 30s linear infinite;
    }

    @keyframes move {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }
        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    .profile-img {
        width: 320px;
        height: 320px;
        border-radius: 50%;
        border: 10px solid rgba(255, 255, 255, 0.3);
        object-fit: cover;
        transition: all 0.5s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .profile-img:hover {
        transform: scale(1.05) rotate(5deg);
        border-color: rgba(255, 255, 255, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .hero-title {
        font-size: 4rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .hero-subtitle {
        font-size: 1.8rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2rem;
        font-weight: 300;
    }

    .hero-description {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.95);
        margin-bottom: 2.5rem;
        line-height: 1.6;
    }

    .cta-buttons {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .cta-btn {
        padding: 1rem 2.5rem;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--primary-color);
        background: white;
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .cta-btn.outline {
        background: transparent;
        color: white;
        border: 2px solid white;
    }

    .cta-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .cta-btn.outline:hover {
        background: white;
        color: var(--primary-color);
    }

    .social-links {
        margin-top: 2rem;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        margin: 0 10px;
        text-decoration: none;
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
    }

    .social-links a:hover {
        background: white;
        color: var(--primary-color);
        transform: translateY(-3px) rotate(8deg);
    }

    @media (max-width: 991.98px) {
        .hero-title {
            font-size: 3rem;
        }
        .hero-subtitle {
            font-size: 1.5rem;
        }
        .profile-img {
            width: 280px;
            height: 280px;
            margin-top: 2rem;
        }
        .cta-buttons {
            flex-direction: column;
        }
        .cta-btn {
            text-align: center;
        }
    }
</style>
@endpush

@section('main-content')
    <!-- Navigation -->
    @include('components.navigation')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center hero-content">
                <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
                    <h1 class="hero-title">Hi, I'm Jannatul Ferdous Riva</h1>
                    <h2 class="hero-subtitle">Web Developer & Software Engineer</h2>
                    <p class="hero-description">Transforming ideas into elegant digital solutions with clean code and creative design.</p>
                    <div class="cta-buttons">
                        <a href="/contact" class="cta-btn">Let's Connect</a>
                        <a href="/projects" class="cta-btn outline">View Projects</a>
                    </div>
                    <div class="social-links">
                        <a href="#" target="_blank" title="GitHub"><i class="fab fa-github fa-lg"></i></a>
                        <a href="#" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in fa-lg"></i></a>
                        <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="mailto:riva15-4928@diu.edu.bd" title="Email"><i class="fas fa-envelope fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{asset('assets/images/rj.jpg')}}" alt="Jannatul Ferdous Riva" class="profile-img">
                </div>
            </div>
        </div>
    </section>
@endsection

