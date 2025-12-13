@extends('layout.Admin')

@section('content')
    <h1>Student Details</h1>

    <div>
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>Age:</strong> {{ $student->age }}</p>
        <p><strong>Created At:</strong> {{ $student->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $student->updated_at }}</p>
    </div>

    <div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Students List</a>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit Student</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Student</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('storage/js/student.js') }}"></script>
@endpush


