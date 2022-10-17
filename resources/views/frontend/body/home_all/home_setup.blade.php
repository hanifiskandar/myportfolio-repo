
@php
            $homesetup = App\Models\Home::find(1);
@endphp



<section id="home" class="full-height px-lg-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="display-4 fw-bold text-white" data-aos="fade-up"> {{ $homesetup->title }}</h1>
                <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">{{ $homesetup->short_description }}</p>
                <div data-aos="fade-up" data-aos-delay="600">
                    <a href="#work" class="btn btn-brand me-3">Explore My Work</a>
                    <a href="#" class="link-custom">Call: {{ $homesetup->phone_number }}</a>
                </div>
            </div>
        </div>
    </div>

</section>