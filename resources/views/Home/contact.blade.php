@extends('layout.Home')

@section('content')
<div class="container">

    {{-- Page Title --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="text-muted">
            Need help? Got questions? We got you 📩
        </p>
    </div>

    <div class="row">
        {{-- Contact Info --}}
        <div class="col-md-5 mb-4">
            <h4>Get in Touch</h4>
            <p>
                If you have any questions regarding courses, enrollment, or
                technical issues, feel free to contact us.
            </p>

            <ul class="list-unstyled">
                <li class="mb-2">
                    📍 <strong>Address:</strong> 339P+62Q, Benghazi
                </li>
                <li class="mb-2">
                    📧 <strong>Email:</strong> support@limu.edu.ly
                </li>
                <li class="mb-2">
                    📞 <strong>Phone:</strong> +218 91 234 5678
                </li>
            </ul>
        </div>

        {{-- Contact Form --}}
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Send Us a Message</h5>

                    <form method="POST" action="#">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="you@example.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="4"
                                      placeholder="Write your message here..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
