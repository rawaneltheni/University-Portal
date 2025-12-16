@extends('layout.Admin')

@section('title', 'Edit Professor')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h4>Edit Professor</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('professor.update', $professor->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name"
                       class="form-control"
                       value="{{ old('name', $professor->name) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"
                       class="form-control"
                       value="{{ old('email', $professor->email) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Password <small class="text-muted">(leave empty to keep)</small>
                </label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Department</label>
                <select name="depId" class="form-select">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}"
                            {{ $professor->depId == $department->id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-warning">Update</button>
            <a href="{{ route('professor.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
