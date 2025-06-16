@extends('layouts.adminmain')

@section('title', 'Refund Policy Management')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Refund Policy Management</h2>

        {{-- Success and Error Messages --}}
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

        {{-- Refund Policy Table --}}
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Heading</th>
                    <th>Answer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($refunds as $refund)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $refund->heading }}</td>
                        <td>{{ Str::limit($refund->answer, 50) }} {{-- Limit the answer length for better readability --}}</td>
                        <td>
                            {{-- Edit Button --}}
                            <a href="{{ route('backend.refunds.edit', $refund) }}" class="btn btn-warning btn-sm me-2"
                                title="Edit Refund Policy">Edit</a>

                            {{-- Delete Button --}}
                            <form action="{{ route('backend.refunds.destroy', $refund) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this refund policy?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Add New Refund Policy Button --}}
        <a href="{{ route('backend.refunds.create') }}" class="btn btn-primary mt-3 d-block mx-auto">Add New Refund
            Policy</a>
    </div>

@endsection
