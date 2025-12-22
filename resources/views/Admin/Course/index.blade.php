@extends('layout.Admin')

@section('content')
<div class="courses-page">

    <div class="courses-hero">
        <div class="big-title">Courses</div>

        <div class="bar">
            <h2>Courses</h2>

            <div class="right-tools">
                @if(session('success'))
                    <div class="alert alert-success mb-0">{{ session('success') }}</div>
                @endif

                <a href="{{ route('course.create') }}" class="btn btn-primary">
                    + Add New Course
                </a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            @if($courses->isEmpty())
                <div class="alert alert-info mb-0">No courses found.</div>
            @else
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Unit</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($courses as $i => $course)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->symbol }}</td>
                        <td>{{ $course->unit }}</td>
                        <td class="text-end">
                            <a href="{{ route('course.show', $course) }}" class="btn btn-info btn-sm">Details</a>
                            <a href="{{ route('course.edit', $course) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('course.destroy', $course) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this course?')">
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
