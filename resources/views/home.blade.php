@extends('layouts.master')
@section('content')

    <header class="py-5 reveal">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">PHP Laravel Developer at MeemSoft</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">I am a Laravel developer with 2 years of experience</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Muhammad Afaq
                                Tahir</span></h1>
                        <div class="mb-4">
                            <a href="tel:923017730687" class="text-decoration-none text-dark me-4 hover-primary">
                                <i class="bi bi-telephone-fill text-primary me-2"></i>+92 301 7730687
                            </a>
                            <a href="mailto:afaqtahir0687@gmail.com" class="text-decoration-none text-dark hover-primary">
                                <i class="bi bi-envelope-fill text-primary me-2"></i>afaqtahir0687@gmail.com
                            </a>
                        </div>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                href="{{ route('resume') }}">Resume</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                href="{{ route('projects') }}">Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <img class="profile-img" src="assets/afaq.png" alt="Afaq Tahir" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-light py-5 reveal">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-10">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder mb-5"><span class="text-gradient d-inline">What I Do</span></h2>
                        <div class="row g-4 justify-content-center">
                            <!-- Service 1 -->
                            <div class="col-md-4">
                                <div class="card border-0 shadow rounded-4 h-100 p-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-4"><i class="bi bi-code-square"></i></div>
                                    <h4 class="fw-bolder">Web Development</h4>
                                    <p class="text-muted small">Specializing in Laravel, I build scalable, high-performance web applications with clean, maintainable code.</p>
                                </div>
                            </div>
                            <!-- Service 2 -->
                            <div class="col-md-4">
                                <div class="card border-0 shadow rounded-4 h-100 p-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-4"><i class="bi bi-cpu"></i></div>
                                    <h4 class="fw-bolder">API Design</h4>
                                    <p class="text-muted small">Designing robust RESTful APIs that power modern mobile and web experiences with security and speed.</p>
                                </div>
                            </div>
                            <!-- Service 3 -->
                            <div class="col-md-4">
                                <div class="card border-0 shadow rounded-4 h-100 p-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-4"><i class="bi bi-database"></i></div>
                                    <h4 class="fw-bolder">Database Management</h4>
                                    <p class="text-muted small">Expertise in MySQL and database architectural design to ensure data integrity and optimized performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">I am a passionate and results-driven <strong>Sr. PHP/Laravel Developer</strong> with over 2 years of professional experience building dynamic, secure, and scalable web applications.</p>
                        <p class="text-muted">My technical expertise spans the full development lifecycle, from designing robust back-end architectures to crafting responsive, user-friendly interfaces. I am also an AI Prompt Engineer, leveraging AI to solve complex problems efficiently.</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient hover-scale" href="https://wa.me/923017730687?text=Hello%20Afaq%20Tahir" target="_blank"><i class="bi bi-whatsapp"></i></a>
                            <a class="text-gradient hover-scale" href="https://linkedin.com/in/afaq-tahir0687" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient hover-scale" href="https://github.com/afaqtahir0687" target="_blank"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .hover-scale {
            transition: transform 0.3s ease;
            display: inline-block;
        }
        .hover-scale:hover {
            transform: scale(1.2);
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
        }
        .hover-primary:hover {
            color: #1e30f3 !important;
            transition: color 0.3s ease;
        }
    </style>
@endsection