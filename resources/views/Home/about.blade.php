@extends('layout.Home')

@section('title', 'About')

@section('content')
<div class="container about-page">

    {{-- Page Title --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">
            About UniPortal
            <i class="fa-solid fa-circle-info ms-2"></i>
        </h1>
        <p class="text-muted">
            A modern system built to simplify university management
            <i class="fa-solid fa-graduation-cap ms-1"></i>
        </p>
    </div>

    {{-- About Content --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h3>
                <i class="fa-solid fa-lightbulb me-2"></i>
                Why UniPortal?
            </h3>
            <p>
                UniPortal is a web-based university management system designed to
                help administrators, professors, and students interact efficiently.
            </p>
            <p>
                The platform centralizes academic data such as student records,
                departments, courses, and enrollments into one secure system.
            </p>
        </div>

        <div class="col-md-6 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png"
                 class="img-fluid" width="280" alt="About UniPortal">
        </div>
    </div>

    {{-- Mission & Vision --}}
    <div class="row text-center">

        <!-- Mission -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fa-solid fa-bullseye me-2"></i>
                        Our Mission
                    </h4>
                    <p class="card-text">
                        To provide a reliable and scalable system that simplifies
                        academic management and improves productivity.
                    </p>
                </div>
            </div>
        </div>

        <!-- Vision -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fa-solid fa-rocket me-2"></i>
                        Our Vision
                    </h4>
                    <p class="card-text">
                        To become a smart digital hub that connects all university
                        services in one platform.
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection