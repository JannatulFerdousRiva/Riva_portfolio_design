@extends('index')
@push('style')
<style>
    .projects-section {
        padding: 120px 0;
        background: linear-gradient(135deg, #FFF0F5 0%, #FFE4E1 100%);
    }

    .section-title {
        color: var(--primary-color);
        position: relative;
        display: inline-block;
        margin-bottom: 3rem;
    }

    .section-title::after {
        content: '';
        position: absolute;
        width: 50%;
        height: 3px;
        background: var(--primary-color);
        bottom: -10px;
        left: 25%;
    }

    .project-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.1);
        transition: all 0.3s ease;
        height: 100%;
    }

    .project-card:hover {
        transform: translateY(-10px);
    }

    .project-image {
        position: relative;
        overflow: hidden;
    }

    .project-image img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .project-card:hover .project-image img {
        transform: scale(1.1);
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 105, 180, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .project-card:hover .project-overlay {
        opacity: 1;
    }

    .project-links a {
        display: inline-block;
        width: 45px;
        height: 45px;
        line-height: 45px;
        text-align: center;
        background: white;
        color: var(--primary-color);
        border-radius: 50%;
        margin: 0 5px;
        transition: all 0.3s ease;
    }

    .project-links a:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .project-content {
        padding: 1.5rem;
    }

    .technology-tag {
        display: inline-block;
        padding: 0.3rem 1rem;
        background: var(--light-pink);
        border-radius: 20px;
        margin: 0.3rem;
        color: var(--primary-color);
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .technology-tag:hover {
        background: var(--primary-color);
        color: white;
    }

    .filter-button {
        padding: 0.5rem 1.5rem;
        margin: 0.5rem;
        border: none;
        border-radius: 25px;
        background: white;
        color: var(--primary-color);
        transition: all 0.3s ease;
    }

    .filter-button.active,
    .filter-button:hover {
        background: var(--primary-color);
        color: white;
    }
</style>
@endpush

@section('main-content')
    <!-- Navigation -->
    @include('components.navigation')
    
    <section class="projects-section">
        <div class="container">
            <h2 class="text-center section-title">My Projects</h2>

            <!-- Project Filters -->
            <div class="text-center mb-5">
                <button class="filter-button active">All</button>
                <button class="filter-button">Web Development</button>
                <button class="filter-button">Laravel</button>
                <button class="filter-button">Frontend</button>
            </div>

            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="https://via.placeholder.com/600x400" alt="E-commerce Project">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="#" target="_blank"><i class="fas fa-link"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>E-commerce Platform</h4>
                            <p class="text-muted">A full-featured e-commerce platform with product management, shopping cart, and payment integration.</p>
                            <div class="technology-tags">
                                <span class="technology-tag">Laravel</span>
                                <span class="technology-tag">MySQL</span>
                                <span class="technology-tag">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="https://via.placeholder.com/600x400" alt="Task Management System">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="#" target="_blank"><i class="fas fa-link"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>Task Management System</h4>
                            <p class="text-muted">A collaborative task management system with real-time updates and team features.</p>
                            <div class="technology-tags">
                                <span class="technology-tag">PHP</span>
                                <span class="technology-tag">Laravel</span>
                                <span class="technology-tag">Vue.js</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="https://via.placeholder.com/600x400" alt="Portfolio Website">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="#" target="_blank"><i class="fas fa-link"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>Personal Portfolio</h4>
                            <p class="text-muted">A modern and responsive portfolio website showcasing my work and skills.</p>
                            <div class="technology-tags">
                                <span class="technology-tag">HTML5</span>
                                <span class="technology-tag">CSS3</span>
                                <span class="technology-tag">JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection