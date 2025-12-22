@extends('layout.Admin') 

@section('title', 'Professors')

@section('content')
<div class="professors-page">

    <div class="professors-hero">
        <div class="big-title">Professors</div>

        <div class="bar">
            <h3>Professors</h3>
            <div class="right-tools">
                @if(session('success'))
                    <div class="alert alert-success mb-0">{{ session('success') }}</div>
                @endif
                <a href="{{ route('professor.create') }}" class="btn btn-primary">+ Add Professor</a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if($professors->isEmpty())
                <div class="alert alert-info mb-0">No professors found.</div>
            @else
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professors as $i => $professor)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $professor->name }}</td>
                        <td>{{ $professor->email }}</td>
                        <td>
                            <span class="badge bg-secondary">
                                {{ $professor->department->name ?? 'N/A' }}
                            </span>
                        </td>
                        <td class="text-end">
                            <a href="{{ route('professor.show', $professor->id) }}"
                               class="btn btn-sm btn-info">Details</a>

                            <a href="{{ route('professor.edit', $professor->id) }}"
                               class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('professor.destroy', $professor->id) }}"
                                  method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this professor?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

</div>
@endsection
