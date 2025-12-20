@extends('layout.Home')

@section('content')
<div class="container">

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold">Welcome to the University Portal 🎓</h1>
            <p class="text-muted mt-3">
                Manage students, courses, departments, and enrollments — all in one place.
            </p>
            <a href="/adminLogin" class="btn btn-primary btn-lg mt-2">Get Started</a>
        </div>
        <div class="col-md-6 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
                 class="img-fluid" width="300">
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">Register, update, and track student records.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Departments</h5>
                    <p class="card-text">Manage university departments and professors.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Courses</h5>
                    <p class="card-text">Create courses and control enrollments.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
