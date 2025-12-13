@extends('layout.Admin')  <!-- Make sure this points to the correct layout -->

@section('content')
    <h1>Add Student</h1>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Add Student</button>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('storage/js/student.js') }}"></script>
@endpush
