@extends('layouts.adminmain')

@section('title', 'Blog Management')

@section('adminmain-container')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Blog Management</h1>
            <a href="{{ route('backend.blogs.create') }}" class="btn btn-primary">Create New Blog</a>
        </div>

        {{-- Success message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Blogs Table --}}
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Published At</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->category }}</td>
                        <td>{{ $blog->author }}</td>
                        <td>{{ $blog->created_at->format('d M, Y') }}</td>
                        <td class="text-center">
                            <a href="{{ route('backend.blogs.edit', $blog->id) }}"
                                class="btn btn-warning btn-sm me-1">Edit</a>
                            <form action="{{ route('backend.blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No blogs found. Start by creating a new blog!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
