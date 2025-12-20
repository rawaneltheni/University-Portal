@extends('layout.Admin')

@section('content')

<h3>Edit Enrollment</h3>

<form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Student -->
    <div class="mb-3">
        <label>Student</label>
        <select name="student_id" class="form-control">
            @foreach ($students as $student)
                <option value="{{ $student->id }}"
                    {{ $student->id == $enrollment->student_id ? 'selected' : '' }}>
                    {{ $student->name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Course -->
    <div class="mb-3">
        <label>Course</label>
        <select name="course_id" class="form-control">
            @foreach ($courses as $course)
                <option value="{{ $course->id }}"
                    {{ $course->id == $enrollment->course_id ? 'selected' : '' }}>
                    {{ $course->title }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Professor -->
    <div class="mb-3">
        <label>Professor</label>
        <select name="professor_id" class="form-control">
            @foreach ($professors as $professor)
                <option value="{{ $professor->id }}"
                    {{ $professor->id == $enrollment->professor_id ? 'selected' : '' }}>
                    {{ $professor->name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Final Mark -->
    <div class="mb-3">
        <label>Final Mark</label>
        <input type="number"
               name="mark"
               value="{{ old('mark', $enrollment->mark) }}"
               class="form-control"
               min="0" max="100">
    </div>

    <button type="submit" class="btn btn-success">
        Update
    </button>

</form>

@endsection
