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
@endsection