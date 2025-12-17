@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Courses</h2>

    <a href="{{ route('course.create') }}" class="btn btn-primary mb-3">
        Add New Course
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Symbol</th>
                <th>Unit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->symbol }}</td>
                <td>{{ $course->unit }}</td>
                <td>
                    <a href="{{ route('course.show', $course) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('course.edit', $course) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('course.destroy', $course) }}"
                          method="POST" style="display:inline;">
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
</div>
@endsection
