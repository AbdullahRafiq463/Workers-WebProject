@extends('layouts.adminmain')

@section('title', 'Create Refund Policy')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Create Refund Policy</h2>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Refund Policy Form --}}
        <form action="{{ route('backend.refunds.store') }}" method="POST">
            @csrf

            {{-- Heading Input --}}
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" required>
            </div>

            {{-- Answer Textarea --}}
            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <textarea class="form-control" id="answer" name="answer" rows="4" required></textarea>
            </div>

            {{-- Submit Button --}}
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add Refund Policy</button>
            </div>
        </form>
    </div>

@endsection
