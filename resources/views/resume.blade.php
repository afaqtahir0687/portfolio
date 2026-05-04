@extends('layouts.master')
@section('content')
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                        <button class="btn btn-primary px-4 py-3" onclick="window.print()">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </button>
                    </div>
                    <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">April 2025 - Present</div>
                                        <div class="small fw-bolder">Sr Laravel Developer</div>
                                        <div class="small text-muted">MeemSoft</div>
                                        <div class="small text-muted">Lahore, Pakistan</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>As a Senior Laravel Developer, I lead the design and development of complex web
                                        applications. I collaborate closely with cross-functional teams to architect
                                        scalable back-end systems, optimize database performance, and mentor junior
                                        developers. My role involves delivering high-quality, secure solutions while
                                        maintaining robust coding standards.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Experience Card 2-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Oct 2023 - April 2025</div>
                                        <div class="small fw-bolder">PHP/Laravel Developer</div>
                                        <div class="small text-muted">Innovabe Solutions</div>
                                        <div class="small text-muted">Lahore, Pakistan</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Transitioned into a core developer role where I built and maintained dynamic,
                                        data-driven Laravel applications. I gained extensive experience in RESTful API
                                        integration, database migrations, and implementing clean MVC architecture. Working
                                        alongside seasoned professionals, I significantly enhanced my problem-solving skills
                                        and backend proficiency.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Experience Card 3-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">May 2023 - Aug 2023</div>
                                        <div class="small fw-bolder">Internship Laravel</div>
                                        <div class="small text-muted">Biotech packages pvt. ltd</div>
                                        <div class="small text-muted">Lahore, Pakistan</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Began my professional journey by assisting in the development of internal web tools
                                        using PHP and Laravel. I learned foundational web development concepts, version
                                        control with Git, and database management. This hands-on experience solidified my
                                        passion for backend programming and set the stage for my career.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2022</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Bahauddin Zakariya University</div>
                                            <div class="small text-muted">Multan</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Bachelor of Arts (Computer Science)</div>
                                            <div class="small text-muted">64%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Acquired comprehensive knowledge in software engineering principles, algorithms,
                                        and advanced web technologies. Developed a strong foundation in problem-solving and
                                        full-stack application development.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Education Card 2-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2019</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Govt Degree College</div>
                                            <div class="small text-muted">Mailsi</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Intermediate in Computer Science (ICS)</div>
                                            <div class="small text-muted">54%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Focused on core programming concepts, database fundamentals, and higher
                                        mathematics, laying the groundwork for a specialized career in software development.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Education Card 3-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2016</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">335W/B Govt High School</div>
                                            <div class="small text-muted">Mailsi</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Matriculation (Science)</div>
                                            <div class="small text-muted">75%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Graduated with an emphasis on science and mathematics, building strong analytical
                                        and logical reasoning skills.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional
                                            Skills</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Backend
                                            Development</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">RESTful API
                                            Design</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Database
                                            Management</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Frontend
                                            Development</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Object-Oriented
                                            Programming</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Problem Solving
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Softwares &
                                            Languages</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP & Laravel
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MySQL</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Git & GitHub
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML, CSS &
                                            Bootstrap</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript, Ajax
                                            & jQuery</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Postman API
                                            Testing</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">React Js
                                            (Beginner)</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Vue Js
                                            (Beginner)</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">AI Prompt
                                            Engineering</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection