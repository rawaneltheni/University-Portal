@extends('layout.Admin')

@section('title', 'Add Student')

@section('content')
<div class="students-page students-form">

    <div class="students-hero">
        <div class="big-title">Add</div>
        <div class="bar">
            <h3>Add Student</h3>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('student.store') }}" method="POST">
                @csrf

                <div class="students-form-grid">
                    <div class="mb-3">
                        <label class="form-label">Student Number</label>
                        <input type="text" name="stNo" class="form-control" value="{{ old('stNo') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email (limu.edu.ly)</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Average</label>
                        <input type="number" step="0.01" name="avg" class="form-control" value="{{ old('avg') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="active">Active</option>
                            <option value="notActive">Not Active</option>
                            <option value="dismissed">Dismissed</option>
                        </select>
                    </div>
                </div>

                <div class="students-actions">
                    <button class="btn btn-primary">Save</button>
                    <a href="{{ route('student.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
