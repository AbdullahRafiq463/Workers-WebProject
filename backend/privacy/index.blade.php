@extends('layouts.adminmain')

@section('title', 'Privacy Policy Management')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Privacy Policy Management</h2>

        {{-- Success message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Table for displaying privacy policies --}}
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($privacies as $privacy)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $privacy->question }}</td>
                        <td>{{ $privacy->answer }}</td>
                        <td>
                            {{-- Edit Button --}}
                            <a href="{{ route('backend.privacy.edit', $privacy) }}"
                                class="btn btn-warning btn-sm me-2">Edit</a>

                            {{-- Delete Button --}}
                            <form action="{{ route('backend.privacy.destroy', $privacy) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Add New Privacy Policy Button --}}
        <a href="{{ route('backend.privacy.create') }}" class="btn btn-primary mt-3 d-block mx-auto">Add New Privacy
            Policy</a>
    </div>

@endsection
