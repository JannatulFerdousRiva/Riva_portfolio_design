@extends('index')
@push('style')
<style>
    .about-section {
        padding: 120px 0;
        background: linear-gradient(135deg, #FFF0F5 0%, #FFE4E1 100%);
    }

    .about-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .about-card:hover {
        transform: translateY(-5px);
    }

    .about-img-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        border: 8px solid rgba(255, 105, 180, 0.1);
    }

    .about-img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .about-img:hover {
        transform: scale(1.05);
    }

    .about-content {
        padding: 2rem;
    }

    .section-title {
        color: var(--primary-color);
        position: relative;
        display: inline-block;
        margin-bottom: 2rem;
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

    .highlight-box {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        margin: 1rem 0;
        border-left: 5px solid var(--primary-color);
        transition: all 0.3s ease;
    }

    .highlight-box:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(255, 105, 180, 0.2);
    }

    .interest-item {
        display: inline-block;
        padding: 0.5rem 1.5rem;
        background: white;
        border-radius: 25px;
        margin: 0.5rem;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
        transition: all 0.3s ease;
    }

    .interest-item:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-3px);
    }
</style>
@endpush

@section('main-content')
    <!-- Navigation -->
    @include('components.navigation')
    
    <section class="about-section">
        <div class="container">
            <h2 class="text-center section-title">About Me</h2>
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="about-img-wrapper">
                        <img src="{{asset('assets/images/rj.jpg')}}" alt="Jannatul Ferdous Riva" class="about-img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-card">
                        <div class="about-content">
                            <h3 class="mb-4">Hello, I'm Jannatul Ferdous Riva</h3>
                            <p class="lead mb-4">A passionate Web Developer and Software Engineer based in Dhaka, Bangladesh.</p>
                            
                            <div class="highlight-box">
                                <h4 class="mb-3">Who I Am</h4>
                                <p>I'm a dedicated web developer with a strong foundation in both front-end and back-end development. Currently pursuing my B.Sc in Computer Science and Engineering at Daffodil International University, I combine academic excellence with practical development experience.</p>
                            </div>

                            <div class="highlight-box">
                                <h4 class="mb-3">What I Do</h4>
                                <p>I specialize in creating beautiful, functional, and user-friendly web applications. My expertise includes HTML5, CSS3, JavaScript, PHP, and Laravel. I'm passionate about writing clean, efficient code and creating seamless user experiences.</p>
                            </div>

                            <div class="mt-4">
                                <h4 class="mb-3">Interests & Hobbies</h4>
                                <div class="interests">
                                    <span class="interest-item">Web Development</span>
                                    <span class="interest-item">UI/UX Design</span>
                                    <span class="interest-item">Problem Solving</span>
                                    <span class="interest-item">Reading</span>
                                    <span class="interest-item">Traveling</span>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="/contact" class="btn btn-lg" style="background-color: var(--primary-color); color: white;">Let's Connect</a>
                                <a href="#" class="btn btn-lg btn-outline-dark ms-2">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection