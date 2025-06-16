@extends('layouts.adminmain')

@section('title', 'Refund Policy Management')

@section('adminmain-container')
    <h1>Teachers</h1>
    <a href="{{ route('backend.teachers.create') }}" class="btn btn-primary">Add New Teacher</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->designation }}</td>
                    <td>{{ $teacher->rating }}</td>
                    <td>
                        <a href="{{ route('backend.teachers.edit', $teacher->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('backend.teachers.destroy', $teacher->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
