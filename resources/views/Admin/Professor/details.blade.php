@extends('layout.Admin')

@section('title', 'Professor Details')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between">
        <h4>Professor Details</h4>
        <a href="{{ route('professor.index') }}" class="btn btn-sm btn-secondary">Back</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>{{ $professor->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $professor->email }}</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>{{ $professor->department->name ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
