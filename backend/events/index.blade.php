@extends('layouts.adminmain')

@section('title', 'Events Management')

@section('adminmain-container')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Events</h3>
                <a href="{{ route('backend.events.create') }}" class="btn btn-light btn-sm">Add New Event</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Event Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($events as $event)
                            <tr>
                                <td>{{ $event->title }}</td>
                                <td>{{ \Carbon\Carbon::parse($event->event_date)->format('d M, Y') }}</td>
                                <td>
                                    <a href="{{ route('backend.events.edit', $event->id) }}"
                                        class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('backend.events.destroy', $event->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this event?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No events found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
