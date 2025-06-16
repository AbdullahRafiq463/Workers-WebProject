@extends('layouts.adminmain')

@section('title', 'Create Term')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Create Term</h2>

        {{-- Success message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Form for adding a new term --}}
        <form action="{{ route('backend.terms.store') }}" method="POST">
            @csrf

            {{-- Question input field --}}
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <input type="text" class="form-control" id="question" name="question" required>
            </div>

            {{-- Answer input field --}}
            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <textarea class="form-control" id="answer" name="answer" rows="4" required></textarea>
            </div>

            {{-- Submit button --}}
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add Term</button>
            </div>
        </form>
    </div>

@endsection
