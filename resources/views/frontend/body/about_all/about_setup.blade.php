


@php
$aboutsetup = App\Models\About::find(1);
@endphp




<section id="about" class="about full-height px-lg-5 section-bg">
    <div class="container">
    
    <div class="section-title">
    <h2>About</h2>
    <p>{{ $aboutsetup->title }}</p>
    </div>
    
    <div class="row">
    <div class="col-lg-4" data-aos="fade-right">
      <img src="{{ asset($aboutsetup->about_image) }}" class="img-fluid rounded-4" alt="">
    </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
      <h3>{{ $aboutsetup->job }}</h3>
      {{-- <p class="fst-italic"> --}}
        <p><strong> Name:</strong>
       {{ $aboutsetup->short_intro }}
        </p>
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $aboutsetup->birthday }}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $aboutsetup->website }}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $aboutsetup->phone }}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $aboutsetup->city }}</span></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $aboutsetup->age }}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $aboutsetup->degree }}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $aboutsetup->email }}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $aboutsetup->freelance }}</span></li>
          </ul>
        </div>
      </div>
      <p>
        {!! $aboutsetup->long_intro !!}
      </p>
    </div>
    </div>
    
    </div>
    </section>