@extends('layouts.adminmain')

@section('title', 'Create Blog')

@section('adminmain-container')
    <div class="container mt-4">
        <h1 class="mb-4">Create New Blog</h1>

        {{-- Display validation errors --}}
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

        {{-- Blog creation form --}}
        <form action="{{ route('backend.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Blog Title <span class="text-danger">*</span></label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter blog title"
                    value="{{ old('title') }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                <textarea id="content" name="content" class="form-control" rows="6" placeholder="Write the blog content here..."
                    required>{{ old('content') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                <input type="text" id="category" name="category" class="form-control" placeholder="Enter category"
                    value="{{ old('category') }}" required>
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" id="author" name="author" class="form-control"
                    placeholder="Enter author name (optional)" value="{{ old('author') }}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Featured Image</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create Blog</button>
            <a href="{{ route('backend.blogs.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
