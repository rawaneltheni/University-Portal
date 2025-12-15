@extends('layout.Admin')

@section('content')

    <div class="container">

        <h2>Departments</h2>


        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


        <a href="{{ route('department.create') }}">Add Department</a>


        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->symbol }}</td>
                    <td>
                    <a href="{{ route('department.show',$department->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('department.edit',$department->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('department.destroy',$department->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection