<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top shadow-sm">
    <div class="container px-5">
        <a class="navbar-brand" href="{{route('home')}}">
            <span class="fw-bolder text-primary">Muhammad Afaq Tahir</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active text-primary border-bottom border-primary' : '' }}" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('resume') ? 'active text-primary border-bottom border-primary' : '' }}" href="{{route('resume')}}">Resume</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('projects') ? 'active text-primary border-bottom border-primary' : '' }}" href="{{route('projects')}}">Projects</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active text-primary border-bottom border-primary' : '' }}" href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-nav .nav-link {
        transition: color 0.3s ease, border-color 0.3s ease;
        padding-bottom: 5px;
        margin-left: 15px;
        border-bottom: 2px solid transparent;
    }
    .navbar-nav .nav-link:hover {
        color: #1e30f3 !important;
    }
</style>