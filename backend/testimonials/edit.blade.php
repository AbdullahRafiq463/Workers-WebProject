@extends('layouts.adminmain')

@section('title', 'Testimonials Management')

@section('adminmain-container')

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0">Edit Testimonial</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('backend.testimonials.update', $testimonial->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="testimonial" class="form-label">Testimonial</label>
                        <textarea class="form-control" name="testimonial" rows="4" required>{{ $testimonial->testimonial }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <select class="form-select" name="rating" required>
                            <option value="1" {{ $testimonial->rating == 1 ? 'selected' : '' }}>1 Star</option>
                            <option value="2" {{ $testimonial->rating == 2 ? 'selected' : '' }}>2 Stars</option>
                            <option value="3" {{ $testimonial->rating == 3 ? 'selected' : '' }}>3 Stars</option>
                            <option value="4" {{ $testimonial->rating == 4 ? 'selected' : '' }}>4 Stars</option>
                            <option value="5" {{ $testimonial->rating == 5 ? 'selected' : '' }}>5 Stars</option>
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        @if ($testimonial->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Testimonial Image"
                                    class="img-thumbnail" width="150">
                            </div>
                        @endif
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-warning btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
