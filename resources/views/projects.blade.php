@extends('layouts.master')
@section('content')
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">RightFreelancer – Freelance Marketplace Platform</h2>
                                    <p>RightFreelancer is a full-featured freelance marketplace platform developed to connect clients with skilled freelancers. I played a key role in the development of core functionalities such as user authentication, project posting, bidding system, secure messaging, and payment integration. The platform supports both freelancers and clients with a seamless and intuitive user experience.</p>
                                    <div class="small fw-bolder mt-3">Tools: Html, Css, Bootstrap, Php, Laravel, Ajax, Jquery</div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">YSEOTools – All-in-One SEO Tools Web Application</h2>
                                    <p>YSEOTools is a web-based platform that offers a comprehensive suite of free SEO tools to help users analyze and improve their website performance. The platform includes utilities such as plagiarism checker, backlink analyzer, keyword position tracker, domain authority checker, and many others.</p>
                                    <div class="small fw-bolder mt-3">Tools: Html, Css, Bootstrap, Php, Laravel, Ajax, Jquery</div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                     <!-- Project Card 3-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Bhatha Management System</h2>
                                    <p>Developed a comprehensive web application using Laravel for managing brick kiln operations. The system includes features such as tracking Kachi Bricks, Paki Bricks, and Rain Loss, Managing New Accounts, Filling Entries, Jallai, Bharai, Sale Entry and Worker management. Integrated modules for sales, general reports, and financial tracking to streamline the entire kiln management process.</p>
                                    <div class="small fw-bolder mt-3">Tools: Html, Css, Bootstrap, Php, Laravel, Ajax, Jquery</div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                     <!-- Project Card 4-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Tarteel e Quran - Online School Management System</h2>
                                    <p>The name of my project is "Tarteel e Quran." Tarteel e Quran" is a Laravel project meant to simplify online academic school management. It helps handle everything related to families: parents, kids, employees, and teachers. This includes managing salaries for staff, generating invoices for parents, and sending notifications about events like leaves or suspensions. It also organizes courses into categories for easy academic planning. Overall, "Tarteel e Quran" aims to make school operations smoother and communication easier for everyone involved. I am currently working on it.</p>
                                    <div class="small fw-bolder mt-3">Tools: Html, Css, Bootstrap, Php, Laravel, Ajax, Jquery</div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                     <!-- Project Card 5-->
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">E-commerce Website for Biotech Packages Pvt. Ltd.</h2>
                                    <p>I developed and designed the website for Biotech Packages, a company providing custom packaging solutions. The website showcases various packaging options, stickers, and labels. I implemented features for users to easily request quotes and explore the company’s services. The project focused on delivering a modern, user-friendly interface to attract businesses needing high-quality packaging. My role included front-end development using HTML, CSS, and Bootstrap, Laravel</p>
                                    <div class="small fw-bolder mt-3">Tools: Html, Css, Bootstrap, Php, Laravel, Jquery</div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('contact') }}">Contact me</a>
            </div>
        </div>
    </section>
@endsection