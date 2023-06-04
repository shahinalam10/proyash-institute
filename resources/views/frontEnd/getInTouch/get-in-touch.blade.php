@extends('frontEnd.master')
@section('title')
    Contact us
@endsection
@section('content')
    <!--get in touch start-->
    <section class="history-section">
        <div class="history-section__image-wrapper">
            <img id="history-section__image" src="{{asset('frontEndAsset')}}/img/background/a.jpg" class="img-fluid" alt="Picsum placeholder image" />
        </div>
        <div class="history-section__text">
            <h1 class="text-light">CONTACT US</h1>
            <a href="{{route('/')}}" class="btn btn-light btn-sm px-3">Home</a>
            <a href="{{route('get-in-touch')}}" class="btn btn-light btn-sm px-3">CONTACT US</a>
        </div>
    </section><br>

    <div class="row" style="width: 100%;margin:0px auto">
        <div class="section-title">
            <h3 class="text-center mt-4 mb-5">PROYASH LOCATION</h3>
        </div>
        <div class="col-md-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14752.609104569308!2d91.800938!3d22.4232937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd786438ed769%3A0xbdb2ec331bdfda77!2zUHJveWFzaCDgpqrgp43gprDgp5_gpr7gprg!5e0!3m2!1sen!2sbd!4v1685127966683!5m2!1sen!2sbd"
                width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">

            </iframe>
        </div>
    </div><br>

    <div class="row align-items-stretch no-gutters contact-wrap"
         style="width: 100%;margin:0px auto;background-color: #e8eaed;">
        <div class="col-md-12">
            <div class="form h-100">
                <div class="section-title">
                    <h3 class="text-center mt-4 mb-5">GET IN TOUCH</h3>
                </div>
                <form class="mb-5" method="post" id="contactForm" name="contactForm">
                    <div class="row getin-touch">
                        <div class="col-md-6 form-group mb-3">
                            <label for="" class="col-form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your email">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="" class="col-form-label">Phone *</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your phone">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="" class="col-form-label">Address *</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your address">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Address *</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your address">
                        </div>
                    </div>
                    <div class="row getin-touch">
                        <div class="col-md-12 form-group mb-3">
                            <label for="message" class="col-form-label">Message *</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                      placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Send Message" class="btn submit-data btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
                <div id="form-message-warning mt-4"></div>
                <div id="form-message-success">
                    Your message was sent, thank you!
                </div>
            </div>
        </div>
    </div>
    <!--get in tuch end-->
@endsection
