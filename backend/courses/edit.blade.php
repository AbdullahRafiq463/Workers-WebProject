@extends('layouts.adminmain')

@section('title', 'Edit Course')

@section('adminmain-container')
    <div class="container">
        <h1>Edit Course</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops! Something went wrong:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('backend.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Course Title <span class="text-danger">*</span></label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', $course->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                <input type="text" id="category" name="category" class="form-control"
                    value="{{ old('category', $course->category) }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                <input type="number" id="price" name="price" class="form-control"
                    value="{{ old('price', $course->price) }}" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" id="rating" name="rating" class="form-control"
                    value="{{ old('rating', $course->rating) }}" min="0" max="5">
            </div>

            <div class="mb-3">
                <label for="author_name" class="form-label">Instructor</label>
                <input type="text" id="author_name" name="author_name" class="form-control"
                    value="{{ old('author_name', $course->author_name) }}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Course Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @if ($course->image)
                    <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" class="img-thumbnail mt-2"
                        width="150">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Course</button>
            <a href="{{ route('backend.courses.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
