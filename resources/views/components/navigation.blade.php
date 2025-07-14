<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">JF Riva</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('education') ? 'active' : '' }}" href="/education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('skills') ? 'active' : '' }}" href="/skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background: rgba(255, 105, 180, 0.95) !important;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .navbar-brand {
        color: #fff !important;
        font-weight: 700;
        font-size: 1.5rem;
    }

    .nav-link {
        color: #fff !important;
        font-weight: 500;
        position: relative;
        padding: 0.5rem 1rem;
        margin: 0 0.2rem;
        transition: all 0.3s ease;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background-color: #fff;
        transition: all 0.3s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
        left: 0;
    }

    .nav-link.active {
        color: #fff !important;
        font-weight: 600;
    }

    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: rgba(255, 105, 180, 0.98);
            padding: 1rem;
            border-radius: 10px;
            margin-top: 0.5rem;
        }
    }
</style>
