@extends('layout.Admin')

@section('content')
<div class="enrollments-page">

    <div class="enrollments-hero">
        <div class="big-title">Enrollment</div>

        <div class="bar">
            <h2>Enrollment</h2>

            <div class="right-tools">
                <a href="{{ route('enrollment.create') }}" class="btn btn-primary btn-sm">
                    + Add New
                </a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Professor</th>
                        <th>Mark</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->student->fname }}</td>
                        <td>{{ $enrollment->course->name }}</td>
                        <td>{{ $enrollment->professor->name }}</td>
                        <td>{{ $enrollment->mark ?? '—' }}</td>
                        <td>
                            <a href="{{ route('enrollment.show', $enrollment) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('enrollment.edit', $enrollment) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('enrollment.destroy', $enrollment) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Drop this enrollment?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
