@extends('layout.Admin')


@section('content')
    <div class="container">
        <h2>Add Department</h2>


        <form method="POST" action="{{ route('department.store') }}">
            @csrf


            <div>
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>


            <div>
                <label>Symbol</label>
                <input type="text" name="symbol" class="form-control" required>
            </div>


            <button class="btn btn-success">Save</button>
            <a href="{{ route('department.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection