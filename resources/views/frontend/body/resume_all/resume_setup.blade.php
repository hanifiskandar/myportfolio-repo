

@php
  $aboutsetup = App\Models\About::find(1);
  $resumesetup = App\Models\Resume::orderBy('id')->get();
@endphp


<section id="resume" class="resume full-height px-lg-5 section-bg">
    <div class="container">

      <div class="section-title">
        <h2 class="hijau">Resume</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      {{-- <div class="row"> --}}
        <div class="col-lg-12" data-aos="fade-up">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>{{ $aboutsetup->short_intro }}</h4>
            <p><em>{{ $aboutsetup->title }}</em></p>
            <ul>
              <li>{{ $aboutsetup->city }}</li>
              <li>{{ $aboutsetup->phone }}</li>
              <li>{{ $aboutsetup->email }}</li>
            </ul>
          </div>

          @foreach ($resumesetup as $item )
              
         
          <h3 class="resume-title">{{ $item->category }}</h3>
          <div class="resume-item">
            <h4>{{ $item->title }}</h4>
            <h5 class="text-brand">{{ $item->date }}</h5>
            <p><em>{{ $item->location }}</em></p>
            <p>{!! $item->description !!}</p>
          </div>
          {{-- <div class="resume-item">
            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
            <h5>2010 - 2014</h5>
            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
          </div> --}}
          
          @endforeach
        {{-- </div> --}}
        {{-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100"> --}}
          {{-- <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Senior graphic design specialist</h4>
            <h5>2019 - Present</h5>
            <p><em>Experion, New York, NY </em></p>
            <ul>
              <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
              <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
              <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
              <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
            </ul>
          </div> --}}
     
        </div>
      {{-- </div> --}}

    </div>
  </section>