@extends('layouts.adminmain')

@section('title', 'Courses Management')

@section('adminmain-container')
    <div class="container">
        <h1>Courses</h1>
        <a href="{{ route('backend.courses.create') }}" class="btn btn-primary mb-3">Add New Course</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th>Instructor</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->category }}</td>
                        <td>${{ number_format($course->price, 2) }}</td>
                        <td>{{ $course->rating }}</td>
                        <td>{{ $course->author_name }}</td>
                        <td>
                            <a href="{{ route('backend.courses.show', $course) }}" class="btn btn-info">View</a>
                            <a href="{{ route('backend.courses.edit', $course) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('backend.courses.destroy', $course) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Delete this course?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
