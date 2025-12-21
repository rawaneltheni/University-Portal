@extends('layout.Home')

@section('title', 'Contact')

@section('content')
<div class="container contact-page">

    <!-- Title Section -->
    <section class="contact-hero text-center mb-5">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="text-muted mt-3">
            We’d love to hear from you! Whether you have questions, feedback, or suggestions,
            our team is here to help.
        </p>
    </section>

    <!-- Contact Form + Newsletter -->
    <div class="row contact-top g-4 mb-5 align-items-start">

        <!-- Contact Form -->
        <div class="col-lg-8">
            <div class="contact-card">
                <form method="POST" action="#">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="email" class="form-control rounded-pill py-2" placeholder="Email">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control rounded-pill py-2" placeholder="Phone">
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control rounded-pill py-2" placeholder="Name">
                        </div>

                        <div class="col-12">
                            <textarea class="form-control rounded-4" rows="5" placeholder="Message"></textarea>
                        </div>

                        <div class="col-12 text-start mt-3">
                            <button type="submit" class="btn btn-primary px-5 rounded-pill">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-4">
            <div class="newsletter-card">
                <h5 class="fw-semibold mb-3">Our Newsletter</h5>
                <p class="small mb-3">
                    Subscribe to get updates on upcoming events and announcements.
                </p>
                <input type="email" class="form-control rounded-pill mb-3" placeholder="Enter your email">
                <button class="btn btn-light rounded-pill w-100 fw-semibold">
                    Subscribe
                </button>
            </div>
        </div>
    </div>

    <!-- Contact Info Boxes -->
    <div class="row text-center g-4 mb-5 contact-info-row">
        <div class="col-md-4">
            <div class="info-box">
                <h5>📞 Phone</h5>
                <p>(+218) 925105128</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <h5>📧 Email</h5>
                <p>mail@influenca.id</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <h5>📍 Address</h5>
                <p>Al Fawyhat – Kairouan Street, Benghazi, Libya</p>
            </div>
        </div>
    </div>

    <!-- Google Map -->
    <div class="map-container contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.042749425728!2d20.082541074467798!3d32.068092473967916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13831c789d7cd627%3A0xa520a9778548872d!2sLibyan%20International%20Medical%20University!5e0!3m2!1sen!2sly!4v1761670913733!5m2!1sen!2sly"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

</div>
@endsection