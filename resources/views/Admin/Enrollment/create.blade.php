@extends('layout.Admin')

@section('content')

  <form action="{{ route('enrollment.store') }}" method="POST">
      @csrf

      <!-- Student -->
      <label>Student</label>
      <select name="studentId" class="form-control" required>
          @foreach($students as $student)
            <option value="{{ $student->id }}" {{ old('studentId') == $student->id ? 'selected' : '' }}>
                    {{ $student->id }} - {{ $student->name }} 
            </option>
          @endforeach
      </select>

      <!-- Course -->
      <label>Course</label>
      <select name="courseId" class="form-control" required>
          @foreach($courses as $course)
              <option value="{{ $course->id }}" {{ old('courseId') == $course->id ? 'selected' : '' }}>
                    {{ $course->id }} - {{ $course->name }} 
            </option>
          @endforeach
      </select>

      <!-- Professor -->
      <label>Professor</label>
      <select name="professorId" class="form-control" required>
          @foreach($professors as $professor)
             <option value="{{ $professor->id }}" {{ old('professorId') == $professor->id ? 'selected' : '' }}>
                    {{ $professor->id }} - {{ $professor->name }} 
            </option>
          @endforeach
      </select>

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
      <button class="btn btn-primary mt-3">Enroll</button>
  </form>

@endsection

