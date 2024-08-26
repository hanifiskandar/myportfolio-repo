<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
            <span class="h3 fw-bold d-block d-lg-none">Muhammad Hanif</span>
            {{-- <img src="{{ asset('frontend/assets/images/hanif.jpeg') }}" class="d-none d-lg-block rounded-circle avatar-xl" alt=""> --}}
            <img src="{{ asset($resume->personal_detail->image) }}" class="d-none d-lg-block rounded-circle avatar-xl" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#work-experience">Work Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#languages">Languages</a>
                </li>
            </ul>
        </div>
    </div>
</nav>