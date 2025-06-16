@extends('layouts.adminmain')

@section('title', 'Create Privacy Policy')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Create Privacy Policy</h2>

        {{-- Success message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Form for adding a privacy policy --}}
        <form action="{{ route('backend.privacy.store') }}" method="POST">
            @csrf

            {{-- Question Field --}}
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <input type="text" class="form-control" id="question" name="question" value="{{ old('question') }}"
                    required>
                @error('question')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Answer Field --}}
            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <textarea class="form-control" id="answer" name="answer" rows="4" required>{{ old('answer') }}</textarea>
                @error('answer')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Submit Button --}}
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add Privacy Policy</button>
            </div>
        </form>
    </div>

@endsection
