@extends('layout.Admin')

@section('content')
<div class="departments-page departments-form">

    <div class="departments-hero">
        <div class="big-title">Add</div>
        <div class="bar">
            <h2>Add Department</h2>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('department.store') }}">
                @csrf

                <div class="departments-form-grid">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Symbol</label>
                        <input type="text" name="symbol" class="form-control" required>
                    </div>
                </div>

                <div class="students-actions">
                    <button class="btn btn-primary">Save</button>
                    <a href="{{ route('department.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
