<section id="education" class="education full-height px-lg-5 section-bg">
    <div class="container">
        <div class="section-title">
            <h2 class="hijau">Education</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="col-lg-12" data-aos="fade-up">
            <br>
            @foreach ($resume->educations as $education)
                {{-- <h3 class="education-title">{{ $education->course }}</h3> --}}
                <div class="education-item">
                    <h4>{{ $education->course }}</h4>
                    <h5 class="text-brand">{{ $education->start_date }} - {{ $education->end_date }}</h5>
                    <p><em>{{ $education->institution }}</em></p>
                    <p>{!! $education->course_highlight !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
