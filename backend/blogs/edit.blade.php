@extends('layouts.adminmain')

@section('title', 'Edit Blog')

@section('adminmain-container')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Blog</h1>

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

        {{-- Blog update form --}}
        <form action="{{ route('backend.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Blog Title <span class="text-danger">*</span></label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', $blog->title) }}" placeholder="Enter blog title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                <textarea id="content" name="content" class="form-control" rows="6" placeholder="Write the blog content here..."
                    required>{{ old('content', $blog->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                <input type="text" id="category" name="category" class="form-control"
                    value="{{ old('category', $blog->category) }}" placeholder="Enter category" required>
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" id="author" name="author" class="form-control"
                    value="{{ old('author', $blog->author) }}" placeholder="Enter author name (optional)">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Featured Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @if ($blog->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $blog->image) }}" width="150" class="img-thumbnail"
                            alt="Current Image">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Blog</button>
            <a href="{{ route('backend.blogs.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
