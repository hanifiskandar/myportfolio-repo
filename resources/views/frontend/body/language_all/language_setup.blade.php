<section id="languages" class="languages full-height px-lg-5 section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Languages</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row languages-content">
            @foreach ($resume->languages as $language)
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="progress">
                        <span class="language">{{ $language->name }} <i class="val">{{ $language->level }}%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $language->level }}"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
