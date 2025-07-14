@extends('index')
@push('style')
<style>
    .education-section {
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

    .timeline {
        position: relative;
        padding: 2rem 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        width: 3px;
        background: var(--primary-color);
        top: 0;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .timeline-item {
        margin-bottom: 3rem;
        position: relative;
        width: 50%;
        padding: 0 2rem;
    }

    .timeline-item:nth-child(odd) {
        left: 0;
        text-align: right;
    }

    .timeline-item:nth-child(even) {
        left: 50%;
    }

    .timeline-content {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.1);
        position: relative;
        transition: all 0.3s ease;
    }

    .timeline-content:hover {
        transform: translateY(-5px);
    }

    .timeline-dot {
        width: 20px;
        height: 20px;
        background: var(--primary-color);
        border-radius: 50%;
        position: absolute;
        top: 20px;
    }

    .timeline-item:nth-child(odd) .timeline-dot {
        right: -10px;
    }

    .timeline-item:nth-child(even) .timeline-dot {
        left: -10px;
    }

    .achievement-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
        border-left: 5px solid var(--primary-color);
        transition: all 0.3s ease;
    }

    .achievement-card:hover {
        transform: translateX(5px);
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.1);
    }

    @media (max-width: 768px) {
        .timeline::before {
            left: 30px;
        }
        
        .timeline-item {
            width: 100%;
            padding-left: 60px;
            padding-right: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 0;
        }
        
        .timeline-item:nth-child(odd) {
            text-align: left;
        }
        
        .timeline-dot {
            left: 20px !important;
        }
    }
</style>
@endpush

@section('main-content')
    <!-- Navigation -->
    @include('components.navigation')
    
    <section class="education-section">
        <div class="container">
            <h2 class="text-center section-title">Education & Achievements</h2>
            
            <div class="timeline">
                <!-- BSc in CSE -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-dot"></div>
                        <h3>B.Sc in Computer Science and Engineering</h3>
                        <h4 class="text-pink">Daffodil International University</h4>
                        <p class="text-muted">2022 - 2025</p>
                        <p>Currently pursuing my bachelor's degree with a focus on:</p>
                        <ul>
                            <li>Web Development & Programming</li>
                            <li>Data Structures & Algorithms</li>
                            <li>Database Management Systems</li>
                            <li>Software Engineering</li>
                        </ul>
                    </div>
                </div>

                <!-- HSC -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-dot"></div>
                        <h3>Higher Secondary Certificate (HSC)</h3>
                        <h4 class="text-pink">Dr. Mahbubur Rahman Mollah College</h4>
                        <p class="text-muted">2020</p>
                        <p>Completed HSC with excellent academic results:</p>
                        <ul>
                            <li>Major: Science</li>
                            <li>Notable subjects: Physics, Chemistry, Mathematics</li>
                            <li>Participated in various science competitions</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h3 class="text-center mb-4">Additional Achievements</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="achievement-card">
                            <h4>Web Development Certification</h4>
                            <p class="text-muted">Complete Web Development Course</p>
                            <p>Mastered modern web technologies including HTML5, CSS3, JavaScript, and PHP.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="achievement-card">
                            <h4>Programming Contest Participant</h4>
                            <p class="text-muted">University Programming Contest</p>
                            <p>Participated in various programming contests, strengthening problem-solving skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection