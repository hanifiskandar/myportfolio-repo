@extends('frontend.main_master')
@section('main')


{{-- <div id="content-wrapper"> --}}
    <section id="about" class="about full-height px-lg-5 section-bg">
        <div class="container">
    
          <div class="section-title">
            <h2>Work Detail</h2>
            <h3 class="text-dark">{{ $work->title }}</h3>
            <p>{{ $work->intro }}</p>
          </div>
    
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="{{ asset($work->image) }}" class="img-fluid rounded-4" alt="" height="300px" width="900px">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
             
              {!! $work->description !!}
            </div>
          </div>
    
        </div>
      </section><!-- End About Section -->
 

{{-- 
</div> --}}


@endsection