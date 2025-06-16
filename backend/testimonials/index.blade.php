@extends('layouts.adminmain')

@section('title', 'Testimonials Management')

@section('adminmain-container')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Testimonials</h3>
                <a href="{{ route('backend.testimonials.create') }}" class="btn btn-light btn-sm">Add New Testimonial</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Testimonial</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->rating }} Star{{ $testimonial->rating > 1 ? 's' : '' }}</td>
                                <td>{{ Str::limit($testimonial->testimonial, 50) }}</td>
                                <td>
                                    <a href="{{ route('backend.testimonials.edit', $testimonial->id) }}"
                                        class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('backend.testimonials.destroy', $testimonial->id) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this testimonial?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No testimonials found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
