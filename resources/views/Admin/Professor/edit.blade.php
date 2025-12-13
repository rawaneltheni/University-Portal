@extends('layout.Admin')

@section('content')
    <h1>Edit Professor</h1>
    <form action="{{ route('professor.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $professor->name }}" required>
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" id="department" class="form-control" value="{{ $professor->department }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $professor->email }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Professor</button>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('storage/js/professor.js') }}"></script>
@endpush