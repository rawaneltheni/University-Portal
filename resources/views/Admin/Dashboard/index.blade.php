@extends('layout.Admin')

@section('content')

<div class="container mt-4">

    <h2>Admin Dashboard</h2>

    <!-- ================= SUMMARY CARDS ================= -->
    <div class="row mt-4">

        <!-- Students -->
        <div class="col-md-3">
            <div class="card text-center shadow-sm dashboard-card">
                <div class="card-body">
                    <div class="dash-icon">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <h6>Total Students</h6>
                    <h2>{{ $students }}</h2>
                </div>
            </div>
        </div>

        <!-- Courses -->
        <div class="col-md-3">
            <div class="card text-center shadow-sm dashboard-card">
                <div class="card-body">
                    <div class="dash-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h6>Total Courses</h6>
                    <h2>{{ $courses }}</h2>
                </div>
            </div>
        </div>

        <!-- Professors -->
        <div class="col-md-3">
            <div class="card text-center shadow-sm dashboard-card">
                <div class="card-body">
                    <div class="dash-icon">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h6>Total Professors</h6>
                    <h2>{{ $professors }}</h2>
                </div>
            </div>
        </div>

        <!-- Enrollments -->
        <div class="col-md-3">
            <div class="card text-center shadow-sm dashboard-card">
                <div class="card-body">
                    <div class="dash-icon">
                        <i class="fa-solid fa-clipboard-list"></i>
                    </div>
                    <h6>Total Enrollments</h6>
                    <h2>{{ $enrollment }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- ================= STATISTICS SECTION ================= -->
    <div class="mt-5">
        <h4>Statistics Overview</h4>

        <table class="table table-bordered mt-3">
            <thead class="table-light">
                <tr>
                    <th>Metric</th>
                    <th>Value</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Student–Course Ratio</td>
                    <td>{{ $courses > 0 ? round($students / $courses, 2) : 0 }}</td>
                    <td>Average number of students per course</td>
                </tr>
                <tr>
                    <td>Enrollments per Student</td>
                    <td>{{ $students > 0 ? round($enrollment / $students, 2) : 0 }}</td>
                    <td>Average enrollment per student</td>
                </tr>
                <tr>
                    <td>Courses per Professor</td>
                    <td>{{ $professors > 0 ? round($courses / $professors, 2) : 0 }}</td>
                    <td>Average courses handled by a professor</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection