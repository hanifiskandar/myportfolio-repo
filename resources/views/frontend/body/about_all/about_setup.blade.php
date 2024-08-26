<section id="about" class="about full-height px-lg-5 section-bg">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p>{{ $resume->personal_detail->title }}</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset($resume->personal_detail->image) }}" class="img-fluid rounded-4" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $resume->personal_detail->job }}</h3>
                {{-- <p class="fst-italic"> --}}
                <p><strong> Name:</strong>
                    {{ $resume->name }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                <span>{{ $resume->personal_detail->birthday }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <span>{{ $resume->personal_detail->website }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                <span>{{ $resume->personal_detail->phone }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                <span>{{ $resume->personal_detail->address }}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                <span>{{ $resume->personal_detail->age }}</span></li>
                            {{-- <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $resume->personal_detail->degree }}</span></li> --}}
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <span>{{ $resume->email }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                <span>{{ $resume->personal_detail->freelance }}</span></li>
                        </ul>
                    </div>
                </div>
                <p>
                    {!! $resume->personal_detail->summary !!}
                </p>
            </div>
        </div>

    </div>
</section>
