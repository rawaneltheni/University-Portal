@extends('layout.Admin')

@section('content')
<div class="enrollments-page enrollments-form">

    <div class="enrollments-hero">
        <div class="big-title">Add</div>
        <div class="bar">
            <h2>Add Enrollment</h2>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('enrollment.store') }}" method="POST">
                @csrf

                <div class="enrollments-form-grid">
                    <div class="mb-3">
                        <label class="form-label">Student</label>
                        <select name="studentId" class="form-control" required>
                            @foreach($students as $student)
                                <option value="{{ $student->id }}" {{ old('studentId') == $student->id ? 'selected' : '' }}>
                                    {{ $student->id }} - {{ $student->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <select name="courseId" class="form-control" required>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ old('courseId') == $course->id ? 'selected' : '' }}>
                                    {{ $course->id }} - {{ $course->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Professor</label>
                        <select name="professorId" class="form-control" required>
                            @foreach($professors as $professor)
                                <option value="{{ $professor->id }}" {{ old('professorId') == $professor->id ? 'selected' : '' }}>
                                    {{ $professor->id }} - {{ $professor->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="mark" class="form-label">Mark (Optional)</label>
                        <input type="number"
                               name="mark"
                               id="mark"
                               class="form-control @error('mark') is-invalid @enderror"
                               value="{{ old('mark') }}"
                               min="0"
                               max="100"
                               step="0.01"
                               placeholder="Enter mark (0-100)">
                        @error('mark')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">
                            Leave empty if not graded yet. Must be between 0 and 100.
                        </small>
                    </div>
                </div>

                <div class="students-actions">
                    <button class="btn btn-primary">Enroll</button>
                    <a href="{{ route('enrollment.index') }}" class="btn btn-secondary">Back</a>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
