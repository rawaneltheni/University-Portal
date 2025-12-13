@extends('layout.Admin')

@section('content')
    <h1>Professors</h1>
    <a href="{{ route('professor.create') }}" class="btn btn-primary mb-3">Add Professor</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professors as $professor)
                <tr>
                    <td>{{ $professor->name }}</td>
                    <td>{{ $professor->department }}</td>
                    <td>{{ $professor->email }}</td>
                    <td>
                        <a href="{{ route('professor.edit', $professor->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('professor.destroy', $professor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script src="{{ asset('storage/js/professor.js') }}"></script>
@endpush