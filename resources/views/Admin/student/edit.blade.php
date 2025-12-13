@extends('layout.Admin')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}" required>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $student->age }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('storage/js/student.js') }}"></script>
@endpush

