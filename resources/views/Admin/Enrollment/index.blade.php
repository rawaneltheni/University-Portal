@extends('layout.Admin')

@section('content')
<div class="enrollments-page">

    <div class="enrollments-hero">
        <div class="big-title">Enrollment</div>

        <div class="bar">
            <h2>Enrollment</h2>

            <div class="right-tools">
                @if(session('success'))
                    <div class="alert alert-success mb-0">{{ session('success') }}</div>
                @endif

                <a href="{{ route('enrollment.create') }}" class="btn btn-primary btn-sm">
                    + Add New
                </a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            @if($enrollments->isEmpty())
                <div class="alert alert-info mb-0">No enrollments found.</div>
            @else
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Professor</th>
                        <th>Mark</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($enrollments as $i => $enrollment)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $enrollment->student->name }}</td>
                        <td>{{ $enrollment->course->name }}</td>
                        <td>{{ $enrollment->professor->name }}</td>
                        <td>{{ $enrollment->mark ?? '—' }}</td>
                        <td class="text-end">
                            <a href="{{ route('enrollment.show', $enrollment) }}" class="btn btn-info btn-sm">
                                Details
                            </a>
                            <a href="{{ route('enrollment.edit', $enrollment) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

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
            @endif

        </div>
    </div>

</div>
@endsection
