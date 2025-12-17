@extends('layout.Admin')

@section('content')
<div class="container">
    <h2>Add Course</h2>

    <form action="{{ route('course.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Course Symbol</label>
            <input type="text" name="symbol" class="form-control" value="{{ old('symbol') }}">
            @error('symbol') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Units</label>
            <input type="number" name="unit" class="form-control" value="{{ old('unit') }}">
            @error('unit') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-success">Save</button>
        <a href="{{ route('course.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
