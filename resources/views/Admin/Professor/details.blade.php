@extends('layout.Admin')

@section('content')
<div class="professors-page professors-details">

    <div class="professors-hero">
        <div class="big-title">Details</div>
        <div class="bar">
            <h3>Professor Details</h3>
            <div class="right-tools">
                <a href="{{ route('professor.index') }}" class="btn btn-sm btn-secondary">Back</a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
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

</div>
@endsection
