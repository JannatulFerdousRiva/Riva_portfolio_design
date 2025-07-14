@extends('index')
@push('style')
<style>
    .skills-section {
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

    .skill-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
        border: none;
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.1);
        transition: all 0.3s ease;
    }

    .skill-card:hover {
        transform: translateY(-5px);
    }

    .skill-icon {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--light-pink);
        border-radius: 50%;
        margin-bottom: 1.5rem;
        color: var(--primary-color);
        font-size: 2rem;
        transition: all 0.3s ease;
    }

    .skill-card:hover .skill-icon {
        background: var(--primary-color);
        color: white;
        transform: rotate(360deg);
    }

    .progress-bar {
        background-color: var(--primary-color);
    }

    .skill-tag {
        display: inline-block;
        padding: 0.5rem 1rem;
        background: var(--light-pink);
        border-radius: 20px;
        margin: 0.3rem;
        color: var(--primary-color);
        transition: all 0.3s ease;
    }

    .skill-tag:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-3px);
    }

    .certification-card {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        border-left: 5px solid var(--primary-color);
        transition: all 0.3s ease;
    }

    .certification-card:hover {
        transform: translateX(5px);
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.1);
    }
</style>
@endpush

@section('main-content')
    <!-- Navigation -->
    @include('components.navigation')
    
    <section class="skills-section">
        <div class="container">
            <h2 class="text-center section-title">Skills & Expertise</h2>
            
            <!-- Main Skills -->
            <div class="row">
                <div class="col-md-4">
                    <div class="skill-card text-center">
                        <div class="skill-icon mx-auto">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Frontend Development</h3>
                        <div class="skill-tags mt-4">
                            <span class="skill-tag">HTML5</span>
                            <span class="skill-tag">CSS3</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">Bootstrap</span>
                            <span class="skill-tag">React.js</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card text-center">
                        <div class="skill-icon mx-auto">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3>Backend Development</h3>
                        <div class="skill-tags mt-4">
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">Laravel</span>
                            <span class="skill-tag">MySQL</span>
                            <span class="skill-tag">API Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card text-center">
                        <div class="skill-icon mx-auto">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Tools & Technologies</h3>
                        <div class="skill-tags mt-4">
                            <span class="skill-tag">Git</span>
                            <span class="skill-tag">GitHub</span>
                            <span class="skill-tag">VS Code</span>
                            <span class="skill-tag">Postman</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Skills Progress -->
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="skill-card">
                        <h3 class="mb-4">Technical Skills</h3>
                        
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span>HTML/CSS</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span>JavaScript</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span>PHP/Laravel</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span>MySQL</span>
                                <span>75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Certifications -->
                <div class="col-lg-6">
                    <div class="skill-card">
                        <h3 class="mb-4">Certifications</h3>
                        
                        <div class="certification-card">
                            <h4>Web Development Bootcamp</h4>
                            <p class="text-muted mb-2">Udemy</p>
                            <p>Complete modern web development course covering frontend and backend technologies.</p>
                        </div>

                        <div class="certification-card">
                            <h4>PHP with Laravel Framework</h4>
                            <p class="text-muted mb-2">Coursera</p>
                            <p>Advanced Laravel development and best practices.</p>
                        </div>

                        <div class="certification-card">
                            <h4>JavaScript Algorithms and Data Structures</h4>
                            <p class="text-muted mb-2">freeCodeCamp</p>
                            <p>Advanced JavaScript concepts and problem-solving techniques.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection