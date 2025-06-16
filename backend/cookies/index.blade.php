@extends('layouts.adminmain')

@section('title', 'Cookies Management')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Cookies Policy Management</h2>

        {{-- Success message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Table of cookies --}}
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
                @forelse ($cookies as $cookie)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cookie->question }}</td>
                        <td>{{ \Str::limit($cookie->answer, 50) }}</td> {{-- Limiting the display of answer --}}
                        <td>
                            <a href="{{ route('backend.cookies.edit', $cookie) }}"
                                class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('backend.cookies.destroy', $cookie) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this cookie policy?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No cookie policies found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Add new cookie policy button --}}
        <a href="{{ route('backend.cookies.create') }}" class="btn btn-primary mt-3 d-block mx-auto">Add New Cookie
            Policy</a>
    </div>

@endsection
