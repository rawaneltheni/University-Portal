@extends('layout.Admin')

@section('content')
<div class="departments-page departments-details">

    <div class="departments-hero">
        <div class="big-title">Details</div>
        <div class="bar">
            <h2>Department Details</h2>

            <div class="right-tools">
                <a href="{{ route('department.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $department->name }}</p>
            <p><strong>Symbol:</strong> {{ $department->symbol }}</p>
        </div>
    </div>

</div>
@endsection
