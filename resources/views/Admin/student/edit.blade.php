@extends('layout.Admin')

@section('content')
<div class="students-page students-form">

    <div class="students-hero">
        <div class="big-title">Edit</div>
        <div class="bar">
            <h3>Edit Student</h3>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf @method('PUT')

                <div class="students-form-grid">
                    <div class="mb-3">
                        <label class="form-label">Student Number</label>
                        <input type="text" name="stNo" class="form-control" value="{{ $student->stNo }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password (leave empty to keep)</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Average</label>
                        <input type="number" step="0.01" name="avg" class="form-control" value="{{ $student->avg }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="active" @selected($student->status=='active')>Active</option>
                            <option value="notActive" @selected($student->status=='notActive')>Not Active</option>
                            <option value="dismissed" @selected($student->status=='dismissed')>Dismissed</option>
                        </select>
                    </div>
                </div>

                <div class="students-actions">
                    <button class="btn btn-warning">Update</button>
                    <a href="{{ route('student.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
