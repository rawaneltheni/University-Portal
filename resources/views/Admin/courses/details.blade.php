@extends('layout.app')

@section('content')
<div class="container">
    <h2>Course Details</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Name:</strong> {{ $course->name }}</li>
        <li class="list-group-item"><strong>Symbol:</strong> {{ $course->symbol }}</li>
        <li class="list-group-item"><strong>Units:</strong> {{ $course->unit }}</li>
    </ul>

    <br>
    <a href="{{ route('course.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
