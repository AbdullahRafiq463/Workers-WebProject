@extends('layouts.adminmain')

@section('title', 'Terms Management')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Terms and Conditions Management</h2>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Table displaying the Terms --}}
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
                @foreach ($terms as $term)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $term->question }}</td>
                        <td>{{ $term->answer }}</td>
                        <td>
                            {{-- Edit Button --}}
                            <a href="{{ route('backend.terms.edit', $term) }}" class="btn btn-warning btn-sm me-2">Edit</a>

                            {{-- Delete Button --}}
                            <form action="{{ route('backend.terms.destroy', $term) }}" method="POST"
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

        {{-- Add New Term Button --}}
        <a href="{{ route('backend.terms.create') }}" class="btn btn-primary mt-3 d-block mx-auto">Add New Term</a>
    </div>

@endsection
