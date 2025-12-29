@extends('layout.Home')

@section('title', 'Home')

@section('content')
<div class="container">

    <!-- HERO -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold">
                Welcome to the University Portal
                <i class="fa-solid fa-graduation-cap ms-2"></i>
            </h1>
            <p class="text-muted mt-3">
                Manage students, courses, departments, and enrollments — all in one place.
            </p>
            <a href="/adminLogin" class="btn btn-primary btn-lg mt-2">
                <i class="fa-solid fa-arrow-right-to-bracket me-2"></i>
                Get Started
            </a>
        </div>

       
    </div>

    <!-- FEATURES -->
    <div class="row text-center home-features">

        <!-- Students -->
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">
                        Register, update, and track student records easily.
                    </p>
                </div>
            </div>
        </div>

        <!-- Departments -->
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body">
                    <div class="feature-icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h5 class="card-title">Departments</h5>
                    <p class="card-text">
                        Manage university departments and professors.
                    </p>
                </div>
            </div>
        </div>

        <!-- Courses -->
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body">
                    <div class="feature-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h5 class="card-title">Courses</h5>
                    <p class="card-text">
                        Create courses and control enrollments efficiently.
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection