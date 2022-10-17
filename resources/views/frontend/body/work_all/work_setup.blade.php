
@php
    
    $work = App\Models\Work::orderBy('id')->get();
@endphp


<section id="work" class="full-height px-lg-5">
    <div class="container">

        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h6 class="text-brand">WORK</h6>
                <h1>My Recent Projects</h1>
            </div>
        </div>
      
   
        <div class="row gy-4">
            @foreach ($work as $item )
            
            <div class="col-md-4 " data-aos="fade-up">
                <div class="card-custom rounded-4 bg-base shadow-effect">
                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4" src="{{ asset($item->image) }}" alt="">
                    </div>
                    <div class="card-custom-content p-4">
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->intro }}</p>
                        <a href="{{ route('work.details',$item->id) }}" class="link-custom">Read More</a>
                    </div>
                </div>
            </div>

            @endforeach

        
        </div>
   

    </div>
</section>