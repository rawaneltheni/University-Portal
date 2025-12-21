@extends('layout.Admin')

@section('content')
<div class="courses-page courses-form">

    <div class="courses-hero">
        <div class="big-title">Add</div>
        <div class="bar">
            <h2>Add Course</h2>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('course.store') }}" method="POST">
                @csrf

                <div class="courses-form-grid">
                    <div class="mb-3">
                        <label class="form-label">Course Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course Symbol</label>
                        <input type="text" name="symbol" class="form-control" value="{{ old('symbol') }}">
                        @error('symbol') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Units</label>
                        <input type="number" name="unit" class="form-control" value="{{ old('unit') }}">
                        @error('unit') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="students-actions">
                    <button class="btn btn-primary">Save</button>
                    <a href="{{ route('course.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
