@extends('layout.Admin')

@section('content')
<div class="courses-page">

    <div class="courses-hero">
        <div class="big-title">Details</div>
        <div class="bar">
            <h2>Course Details</h2>

            <div class="right-tools">
                <a href="{{ route('course.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>Name:</strong> {{ $course->name }}</li>
                <li class="list-group-item"><strong>Symbol:</strong> {{ $course->symbol }}</li>
                <li class="list-group-item"><strong>Units:</strong> {{ $course->unit }}</li>
            </ul>
        </div>
    </div>

</div>
@endsection
