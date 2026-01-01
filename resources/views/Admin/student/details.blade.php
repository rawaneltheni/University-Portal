@extends('layout.Admin')

@section('content')
<div class="students-page students-details">

    <div class="students-hero">
        <div class="big-title">Details</div>
        <div class="bar">
            <h3>Student Details</h3>
            <div class="right-tools">
                <a href="{{ route('student.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
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

</div>
@endsection
