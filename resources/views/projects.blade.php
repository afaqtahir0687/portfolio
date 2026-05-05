@extends('layouts.master')
@section('content')
    <section class="py-5 reveal">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Featured Projects</span></h1>
                <p class="lead text-muted mt-3">A selection of my recent work in web development and system design.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-10">

                    @php
                        $projects = [
                            [
                                'title' => 'RightFreelancer',
                                'subtitle' => 'Freelance Marketplace Platform',
                                'description' => 'A full-featured freelance marketplace platform connecting clients with skilled freelancers. Includes user authentication, bidding system, secure messaging, and payment integration.',
                                'tools' => 'Laravel, MySQL, Ajax, jQuery, Bootstrap',
                                'image' => 'assets/projects/rightfreelancer.png',
                                'link' => 'https://rightfreelancer.com/',
                            ],
                            [
                                'title' => 'FancyMart',
                                'subtitle' => 'Premium E-commerce Platform',
                                'description' => 'A comprehensive e-commerce solution featuring online ordering, product selling, and strategic purchasing modules. Designed for a seamless and secure shopping experience.',
                                'tools' => 'Laravel, MySQL, Bootstrap, Ajax',
                                'image' => 'assets/projects/fancymart.png',
                                'link' => 'https://fancymart.pk/',
                            ],
                            [
                                'title' => 'YSEOTools',
                                'subtitle' => 'SEO Tools Web Application',
                                'description' => 'A comprehensive suite of SEO tools including plagiarism checker, backlink analyzer, and keyword tracker to improve website performance.',
                                'tools' => 'Laravel, PHP, Ajax, Bootstrap',
                                'image' => 'assets/projects/yseotools.png',
                                'link' => '',
                            ],
                            [
                                'title' => 'Bhatha Management',
                                'subtitle' => 'Industrial Operations System',
                                'description' => 'A specialized management system for brick kiln operations, tracking production, sales, and worker management with detailed reporting.',
                                'tools' => 'Laravel, SQL, jQuery, Bootstrap',
                                'image' => 'assets/projects/bhatha.png',
                                'link' => '',
                            ],
                            [
                                'title' => 'Tarteel e Quran',
                                'subtitle' => 'Online School Management',
                                'description' => 'A management platform for online academic schools, handling student enrollments, teacher assignments, and automated invoicing.',
                                'tools' => 'Laravel, MySQL, Ajax, Bootstrap',
                                'image' => 'assets/projects/tarteel.png',
                                'link' => '',
                            ],
                            [
                                'title' => 'Digital CRM',
                                'subtitle' => 'Customer Relationship Management',
                                'description' => 'A comprehensive CRM system designed to manage leads, customer interactions, and business workflows efficiently. It streamlines sales processes and enhances customer relationship management with real-time data and analytics.',
                                'tools' => 'Laravel, MySQL, jQuery, Bootstrap',
                                'image' => 'assets/projects/crm.png',
                                'link' => 'https://crm.fais.digital/',
                            ]
                        ];
                    @endphp

                    @foreach($projects as $project)
                        <div class="card overflow-hidden shadow-lg rounded-4 border-0 mb-5 project-card reveal">
                            <div class="card-body p-0">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-7 p-5">
                                        <h2 class="fw-bolder mb-1">{{ $project['title'] }}</h2>
                                        <div class="text-primary fw-bold mb-3">{{ $project['subtitle'] }}</div>
                                        <p class="text-muted">{{ $project['description'] }}</p>
                                        <div class="d-flex flex-wrap gap-2 mb-4">
                                            @foreach(explode(', ', $project['tools']) as $tool)
                                                <span
                                                    class="badge bg-light text-primary border border-primary-soft">{{ $tool }}</span>
                                            @endforeach
                                        </div>
                                        <div class="d-flex gap-3">
                                            @if($project['link'])
                                                <a href="{{ $project['link'] }}" target="_blank"
                                                    class="btn btn-primary btn-sm px-4 rounded-pill">Live Demo</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="project-img-container">
                                            <img class="img-fluid h-100 w-100 object-fit-cover"
                                                src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <style>
        .project-card {
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: scale(1.02);
        }

        .project-img-container {
            height: 400px;
            overflow: hidden;
        }

        .border-primary-soft {
            border-color: rgba(30, 48, 243, 0.2) !important;
        }

        .badge {
            font-weight: 500;
            padding: 0.5em 1em;
        }
    </style>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('contact') }}">Contact
                    me</a>
            </div>
        </div>
    </section>
@endsection