@extends('layout.Admin')


@section('content')
    <div class="container">
        <h2>Edit Department</h2>


        <form method="POST" action="{{ route('department.update',$department->id) }}">
            @csrf
            @method('PUT')


            <div>
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $department->name }}" required>
            </div>


            <div>
                <label>Symbol</label>
                <input type="text" name="symbol" class="form-control" value="{{ $department->symbol }}" required>
            </div>


            <button class="btn btn-success">Update</button>
            <a href="{{ route('department.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@@extends('layout.Admin')

@section('content')
<div class="departments-page departments-form">

    <div class="departments-hero">
        <div class="big-title">Edit</div>
        <div class="bar">
            <h2>Edit Department</h2>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('department.update',$department->id) }}">
                @csrf
                @method('PUT')

                <div class="departments-form-grid">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $department->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Symbol</label>
                        <input type="text" name="symbol" class="form-control" value="{{ $department->symbol }}" required>
                    </div>
                </div>

                <div class="students-actions">
                    <button class="btn btn-warning">Update</button>
                    <a href="{{ route('department.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
