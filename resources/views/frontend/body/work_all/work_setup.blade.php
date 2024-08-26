<section id="work-experience" class="full-height px-lg-5">
    <div class="container">

        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                {{-- <h6 class="text-brand">Working Experience</h6> --}}
                <h1>Working Experiences</h1>
            </div>
        </div>

        <div class="row gy-4">
            @foreach ($resume->work_experiences as $work_experience)
                <div class="col-md-4 " data-aos="fade-up">
                    <div class="card-custom rounded-4 bg-base shadow-effect">
                        <div class="card-custom-content p-4">
                            <h4>{{ $work_experience->company_name }}</h4>
                            <b>{{ $work_experience->start_date }} - {{ $work_experience->end_date }}</b>
                            <p>{{ $work_experience->position }}</p>
                            <p>{!! $work_experience->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
