@extends('layout.Admin')

@section('content')
    <h1>Students</h1>
    <a href="{{ route('student.create') }}" class="btn btn-primary">Add Student</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View Details</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
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
    <script src="{{ asset('storage/js/student.js') }}"></script>
@endpush
