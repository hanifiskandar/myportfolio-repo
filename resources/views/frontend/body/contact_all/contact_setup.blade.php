



<section id="contact" class="full-height px-lg-5 bg-white">
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col-lg-8 pb-4" data-aos="fade-up">
                <h6 class="text-brandw">CONTACT</h6>
                <h1 class="text-brandw">Interested in working together? Let's talk
                </h1>
            </div>

<div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">

    <form  method="post" action="{{ route('store.contact') }}"  class="row g-lg-3 gy-3">
        @csrf

        <div class="form-group col-md-6">
            <input type="text" class="form-control text-white" placeholder="Enter your name" name="name">
        </div>
        <div class="form-group col-md-6">
            <input type="email"  class="form-control text-white"  placeholder="Enter your email" name="email">
        </div>
        <div class="form-group col-12">
            <input type="text"  class="form-control text-white"  placeholder="Enter subject" name="subject">
        </div>
        <div class="form-group col-12">
            <textarea rows="4"  class="form-control text-white"  placeholder="Enter your message" name="message"></textarea>
        </div>
        <div class="form-group col-12 d-grid">
            <button type="submit" class="btn btn-brand">Contact me</button>
        </div>
    </form>
</div>
        </div>


    </div>
</section>