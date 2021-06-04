@extends('layouts.main-layout')


@section('content')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg mt-5">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>If you want to contact us, please fill it out immediately</p>
        </div>


        <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
                <form action="{{route('contact-as.store')}}" method="post" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>

                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

@endsection
