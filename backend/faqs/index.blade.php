@extends('layouts.adminmain')

@section('title', 'FAQ Management')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">FAQ Management</h2>

        {{-- Display Success or Error Messages --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

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
                @foreach ($faqs as $faq)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>{{ $faq->answer }}</td>
                        <td>
                            <a href="{{ route('backend.faqs.edit', $faq) }}" class="btn btn-warning btn-sm me-2"
                                title="Edit FAQ">Edit</a>
                            <form action="{{ route('backend.faqs.destroy', $faq) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete FAQ"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('backend.faqs.create') }}" class="btn btn-primary mt-3 d-block mx-auto">Add New FAQ</a>
    </div>

@endsection
