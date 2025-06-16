@extends('layouts.adminmain')

@section('title', 'Refund Policy Management')

@section('adminmain-container')

    <h1>Add New Teacher</h1>
    <form action="{{ route('backend.teachers.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" name="designation" id="designation" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="picture">Picture</label>
            <input type="file" class="form-control" name="picture" id="picture" required>
        </div>

        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" class="form-control" name="rating" id="rating" min="0" max="5" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Teacher</button>
    </form>
@endsection
