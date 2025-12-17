@extends('layout.app')

@section('content')
<div class="container">
    <h2>Edit Course</h2>

    <form action="{{ route('course.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="name" class="form-control"
                   value="{{ old('name', $course->name) }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Course Symbol</label>
            <input type="text" name="symbol" class="form-control"
                   value="{{ old('symbol', $course->symbol) }}">
            @error('symbol') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Units</label>
            <input type="number" name="unit" class="form-control"
                   value="{{ old('unit', $course->unit) }}">
            @error('unit') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('course.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
