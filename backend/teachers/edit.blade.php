@extends('layouts.adminmain')

@section('title', 'Refund Policy Management')

@section('adminmain-container')


    <h1>Edit Teacher</h1>
    <form action="{{ route('backend.teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $teacher->name }}" required>
        </div>

        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" name="designation" id="designation"
                value="{{ $teacher->designation }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" required>{{ $teacher->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="picture">Picture</label>
            <input type="file" class="form-control" name="picture" id="picture">
            @if ($teacher->picture)
                <img src="{{ asset('storage/' . $teacher->picture) }}" alt="teacher picture" width="100">
            @endif
        </div>

        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" class="form-control" name="rating" id="rating" value="{{ $teacher->rating }}"
                min="0" max="5" required>
        </div>

        <button type="submit" class="btn btn-warning">Update Teacher</button>
    </form>
@endsection
