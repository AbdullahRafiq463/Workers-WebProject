@extends('layouts.adminmain')

@section('title', 'Testimonials Management')

@section('adminmain-container')

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Create Testimonial</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('backend.testimonials.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="testimonial" class="form-label">Testimonial</label>
                        <textarea class="form-control" name="testimonial" rows="4" placeholder="Write the testimonial here" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <select class="form-select" name="rating" required>
                            <option value="" disabled selected>Select Rating</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
