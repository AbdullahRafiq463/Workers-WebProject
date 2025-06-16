@extends('layouts.adminmain')

@section('title', 'View Course')

@section('adminmain-container')
    <div class="container">
        <h1>View Course</h1>
        <table class="table">
            <tr>
                <th>Title</th>
                <td>{{ $course->title }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $course->category }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $course->description }}</td>
            </tr>
            <tr>
                <th>Instructor Name</th>
                <td>{{ $course->author_name }}</td>
            </tr>
            <tr>
                <th>Instructor Description</th>
                <td>{{ $course->instructor_description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>${{ number_format($course->price, 2) }}</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>{{ $course->rating }}</td>
            </tr>
            <tr>
                <th>Thumbnail</th>
                <td>
                    <img src="{{ asset('storage/' . $course->thumbnail) }}" alt="Thumbnail" width="150">
                </td>
            </tr>
        </table>
        <a href="{{ route('backend.courses.index') }}" class="btn btn-primary">Back to Courses</a>
    </div>
@endsection
