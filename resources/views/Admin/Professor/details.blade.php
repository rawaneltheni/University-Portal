@extends('layout.Admin')

@section('content')
    <h1>Professor Details</h1>

    <div class="card">
        <div class="card-header">
            <h4>{{ $professor->name }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $professor->name }}</p>
            <p><strong>Department:</strong> {{ $professor->department }}</p>
            <p><strong>Email:</strong> {{ $professor->email }}</p>
            <p><strong>Status:</strong> {{ $professor->status }}</p>
            <p><strong>Average Rating:</strong> {{ $professor->avg ?? 'N/A' }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('professor.edit', $professor->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('professor.destroy', $professor->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('storage/js/professor.js') }}"></script>
@endpush