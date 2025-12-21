@extends('layout.Admin')

@section('content')
<div class="enrollments-page enrollments-form">

    <div class="enrollments-hero">
        <div class="big-title">Edit</div>
        <div class="bar">
            <h2>Edit Enrollment</h2>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="enrollments-form-grid">
                    <div class="mb-3">
                        <label class="form-label">Student</label>
                        <select name="student_id" class="form-control">
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}"
                                    {{ $student->id == $enrollment->student_id ? 'selected' : '' }}>
                                    {{ $student->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <select name="course_id" class="form-control">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}"
                                    {{ $course->id == $enrollment->course_id ? 'selected' : '' }}>
                                    {{ $course->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Professor</label>
                        <select name="professor_id" class="form-control">
                            @foreach ($professors as $professor)
                                <option value="{{ $professor->id }}"
                                    {{ $professor->id == $enrollment->professor_id ? 'selected' : '' }}>
                                    {{ $professor->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Final Mark</label>
                        <input type="number"
                               name="mark"
                               value="{{ old('mark', $enrollment->mark) }}"
                               class="form-control"
                               min="0" max="100">
                    </div>
                </div>

                <div class="students-actions">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('enrollment.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
