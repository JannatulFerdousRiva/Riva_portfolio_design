@extends('index')
@push('style')
<style>
    .contact-section {
        padding: 120px 0;
        background-color: var(--light-pink);
    }

    .contact-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.1);
        transition: transform 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
    }

    .contact-info-item {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
        padding: 1.5rem;
        background: white;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .contact-info-item:hover {
        background: var(--light-pink);
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-color);
        color: white;
        border-radius: 50%;
        margin-right: 1rem;
    }

    .contact-form input,
    .contact-form textarea {
        border: 2px solid #FFE4E1;
        padding: 0.8rem;
        margin-bottom: 1.5rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(255, 105, 180, 0.25);
    }

    .submit-btn {
        background: var(--primary-color);
        color: white;
        padding: 1rem 2rem;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        background: var(--accent-color);
        transform: translateY(-3px);
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
</style>
@endpush

@section('main-content')
    <!-- Navigation -->
    @include('components.navigation')
    
    <section class="contact-section">
        <div class="container">
            <h2 class="text-center section-title mb-5">Get In Touch</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="contact-card card">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Contact Information</h3>
                            
                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Email</h5>
                                    <p class="mb-0">riva15-4928@diu.edu.bd</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Phone</h5>
                                    <p class="mb-0">+880 1777777777</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Location</h5>
                                    <p class="mb-0">Dhanmondi, Dhaka, Bangladesh</p>
                                </div>
                            </div>

                            <div class="social-links mt-4 text-center">
                                <a href="#" class="btn btn-outline-pink me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="btn btn-outline-pink me-2"><i class="fab fa-github"></i></a>
                                <a href="#" class="btn btn-outline-pink me-2"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-card card">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Send Message</h3>
                            <form class="contact-form">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="submit-btn">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection