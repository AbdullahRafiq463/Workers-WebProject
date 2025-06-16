@extends('layouts.adminmain')

@section('title', 'Events Management')

@section('adminmain-container')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Edit Event</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('backend.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Event Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $event->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Event Description</label>
                        <textarea name="description" class="form-control" rows="5" required>{{ $event->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" value="{{ $event->location }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="event_date" class="form-label">Event Date</label>
                        <input type="date" name="event_date" class="form-control" value="{{ $event->event_date }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Event Image</label>
                        <input type="file" name="image" class="form-control">
                        @if ($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="img-thumbnail mt-2"
                                style="max-width: 150px;">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success">Update Event</button>
                    <a href="{{ route('backend.events.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
