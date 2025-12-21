@extends('layout.Admin')

@section('content')
<div class="enrollments-page enrollments-details">

    <div class="enrollments-hero">
        <div class="big-title">Details</div>
        <div class="bar">
            <h2>Enrollment Details</h2>

            <div class="right-tools">
                <a href="{{ route('enrollment.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <p><strong>Student:</strong>
                {{ $enrollment->student->fname }} {{ $enrollment->student->lname }}
            </p>

            <p><strong>Course:</strong> {{ $enrollment->course->name }}</p>

            <p><strong>Professor:</strong> {{ $enrollment->professor->name }}</p>

            <p><strong>Final Mark:</strong> {{ $enrollment->mark ?? 'Not assigned' }}</p>

            <p><strong>Enrolled On:</strong> {{ $enrollment->created_at->format('Y-m-d') }}</p>

            <div class="students-actions">
                <a href="{{ route('enrollment.edit', $enrollment) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('enrollment.index') }}" class="btn btn-secondary">Back</a>
            </div>

        </div>
    </div>

</div>
@endsection
