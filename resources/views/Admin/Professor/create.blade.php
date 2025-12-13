@extends('layout.Admin')

@section('content')
    <h1>Add Professor</h1>
    <form action="{{ route('professor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" id="department" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Add Professor</button>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('storage/js/professor.js') }}"></script>
@endpush