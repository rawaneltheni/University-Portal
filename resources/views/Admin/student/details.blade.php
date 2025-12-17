@extends('layout.Admin')

@section('title', 'Student Details')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between">
        <h4>Student Details</h4>
        <a href="{{ route('student.index') }}" class="btn btn-secondary btn-sm">Back</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Student No</th>
                <td>{{ $student->stNo }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $student->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $student->email }}</td>
            </tr>
            <tr>
                <th>Average</th>
                <td>{{ $student->avg ?? '-' }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $student->status }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
