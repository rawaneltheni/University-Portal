@extends('layout.Admin')

@section('content')
<div class="departments-page">

    <div class="departments-hero">
        <div class="big-title">Departments</div>

        <div class="bar">
            <h2>Departments</h2>

            <div class="right-tools">
                @if(session('success'))
                    <div class="alert alert-success mb-0">{{ session('success') }}</div>
                @endif

                <a href="{{ route('department.create') }}" class="btn btn-primary">+ Add Department</a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            @if($departments->isEmpty())
                <div class="alert alert-info mb-0">No departments found.</div>
            @else
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($departments as $i => $department)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->symbol }}</td>
                        <td class="text-end">
                            <a href="{{ route('department.show',$department->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('department.edit',$department->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('department.destroy',$department->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this department?')">
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
