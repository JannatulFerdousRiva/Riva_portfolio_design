    @extends('index')
    @push('style')
    @endpush
    @section('main-content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div class="navbar-brand-circle d-none d-lg-block me-3"></div>
            <a class="navbar-brand" href="#">Jannatul Ferdous Riva</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container main-content mt-5 pt-5">

<section id="about-picture" class="row mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h4 class="card-title text-center mb-3">About me</h4>
                <p>Hello! I'm Jannatul Ferdous Riva, a passionate individual dedicated to Web Development. I enjoy bringing ideas to life, analyzing complex data.</p>
                <p>Outside of my professional life, I have interests in travelling. I believe in the power of collaboration, creating meaningful impact.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-title mb-3">Jannatul Ferdous Riva</h5>
                        <img src="{{asset('assets/images/rj.jpg')}}" alt="Jannatul Ferdous Riva Picture" class="img-fluid rounded-circle border border-primary border-3" style="max-width: 180px;">
                        <p class="mt-3 text-muted">Email: riva15-4928@diu.edu.bd</p>
                        <p class="mt-3 text-muted">Pnone: 0177777777</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class="mb-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">Skills</h4>
                    <div class="row text-center">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                            <i class="fab fa-html5 fa-3x text-primary"></i>
                            <p class="mb-0">HTML</p>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                            <i class="fab fa-css3-alt fa-3x text-primary"></i>
                            <p class="mb-0">CSS3</p>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                            <i class="fab fa-js fa-3x text-primary"></i>
                            <p class="mb-0">JavaScript</p>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                            <i class="fab fa-bootstrap fa-3x text-primary"></i>
                            <p class="mb-0">Bootstrap</p>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                            <i class="fas fa-database fa-3x text-primary"></i>
                            <p class="mb-0">Databases</p>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                            <i class="fab fa-git-alt fa-3x text-primary"></i>
                            <p class="mb-0">Git/GitHub</p>
                        </div>
                        </div>
                </div>
            </div>
        </section>
        <section id="education" class="mb-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">Education</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5>B.Sc in CSE, Daffodil Internatinoal University Name</h5>
                            <p class="mb-1"><em>Year: 2022 - 2025</em></p>
                        </li>
                        <li class="list-group-item">
                            <h5>H.S.C - Dr. Mahbubur Rahman Mollah College</h5>
                            <p class="mb-1"><em>Year: 2020</em></p>
                        </li>
                        </ul>
                </div>
            </div>
        </section>
        <section id="projects" class="mb-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">Projects</h4>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/400x250/FF8833/FFFFFF?text=Project+A" class="card-img-top" alt="Project A">
                                <div class="card-body">
                                    <h5 class="card-title">Project A Title</h5>
                                    <p class="card-text">A brief description of Project A, highlighting its purpose and technologies used (e.g., HTML, CSS, JS).</p>
                                    <a href="#" class="btn btn-sm btn-primary" target="_blank">View Demo</a>
                                    <a href="#" class="btn btn-sm btn-secondary" target="_blank">GitHub</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/400x250/33AACC/FFFFFF?text=Project+B" class="card-img-top" alt="Project B">
                                <div class="card-body">
                                    <h5 class="card-title">Project B Title</h5>
                                    <p class="card-text">A brief description of Project B, highlighting its purpose and technologies used (e.g., React, Node.js, MongoDB).</p>
                                    <a href="#" class="btn btn-sm btn-primary" target="_blank">View Demo</a>
                                    <a href="#" class="btn btn-sm btn-secondary" target="_blank">GitHub</a>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </section>
        <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; Copyright <span id="current-year"></span></p>
        </div>
        </footer>
        
        


    @endsection

