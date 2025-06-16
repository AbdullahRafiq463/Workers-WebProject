@extends('layouts.adminmain')

@section('title', 'Events Management')

@section('adminmain-container')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Create Event</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('backend.events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Event Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Event Description</label>
                        <textarea name="description" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="event_date" class="form-label">Event Date</label>
                        <input type="date" name="event_date" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Event Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Create Event</button>
                    <a href="{{ route('backend.events.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
