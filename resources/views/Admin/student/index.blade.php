@extends('layout.Admin')

@section('title', 'Students')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Students</h3>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('student.create') }}" class="btn btn-primary">+ Add Student</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        @if($students->isEmpty())
            <div class="alert alert-info mb-0">No students found.</div>
        @else
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Student No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avg</th>
                    <th>Status</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $i => $student)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $student->stNo }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->avg ?? '-' }}</td>
                    <td>
                        <span class="badge bg-{{ $student->status == 'active' ? 'success' : ($student->status == 'dismissed' ? 'danger' : 'secondary') }}">
                            {{ $student->status }}
                        </span>
                    </td>
                    <td class="text-end">
                        <a href="{{ route('student.show', $student->id) }}" class="btn btn-sm btn-info">Details</a>
                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
