@extends('layout.Admin')


@section('content')
    <div class="container">
        <h2>Department Details</h2>


        <p><strong>Name:</strong> {{ $department->name }}</p>
        <p><strong>Symbol:</strong> {{ $department->symbol }}</p>


        <a href="{{ route('department.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection