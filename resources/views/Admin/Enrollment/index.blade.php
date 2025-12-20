@extends('layout.Admin')

@section('content')

<div class="container">
  <h2>Enrollment</h2>  
    <a href="{{ route('enrollment.create') }}" class="btn btn-light btn-sm">
        <i class="fas fa-plus me-1"></i> Add New 
    </a>
 <table class="table">
      <thead>
          <tr>
              <th>Student</th>
              <th>Course</th>
              <th>Professor</th>
              <th>Mark</th>
              <th>Actions</th>
          </tr>
      </thead>

      <tbody>
          @foreach($enrollments as $enrollment)
          <tr>
              <td>{{ $enrollment->student->fname }}</td>
              <td>{{ $enrollment->course->name }}</td>
              <td>{{ $enrollment->professor->name }}</td>
              <td>{{ $enrollment->mark ?? '—' }}</td>
              <td>               
                  <a href="{{ route('enrollment.show', $enrollment) }}"class="btn btn-info btn-sm">
                      View
                  </a>
                  <a href="{{ route('enrollment.edit',$enrollment) }}" class="btn btn-sm btn-warning">
                      Edit
                  </a>                  
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
   <form action="{{ route('enrollment.destroy', $enrollment) }}"
              method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"
                    onclick="return confirm('Drop this enrollment?')"
                  >
                Delete
            </button>
        </form>
</div>
 
  

@endsection