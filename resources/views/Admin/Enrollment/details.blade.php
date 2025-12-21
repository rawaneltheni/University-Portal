@extends('layout.Admin')

@section('content')

<h3 class="mb-4">Enrollment Details</h3>

<div class="card">
    <div class="card-body">

        <p><strong>Student:</strong>
            {{ $enrollment->student->fname }}
            {{ $enrollment->student->lname }}
        </p>

        <p><strong>Course:</strong>
            {{ $enrollment->course->name }}
        </p>

        <p><strong>Professor:</strong>
            {{ $enrollment->professor->name }}
        </p>

        <p><strong>Final Mark:</strong>
            {{ $enrollment->mark ?? 'Not assigned' }}
        </p>

        <p><strong>Enrolled On:</strong>
            {{ $enrollment->created_at->format('Y-m-d') }}
        </p>

        <a href="{{ route('enrollment.edit', $enrollment) }}"
           class="btn btn-warning">
            Edit
        </a>

        <!-- <form action="{{ route('enrollment.destroy', $enrollment) }}"
              method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"
                    onclick="return confirm('Drop this enrollment?')"
                  >
                Delete
            </button>
        </form> -->

        <a href="{{ route('enrollment.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </div>
</div>

@endsection
