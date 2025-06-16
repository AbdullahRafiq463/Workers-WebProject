@extends('layouts.adminmain')

@section('title', 'Edit Cookie Policy')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Cookie Policy</h2>

        {{-- Success or error message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Form --}}
        <form action="{{ route('backend.cookies.update', $cookie->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <input type="text" class="form-control" id="question" name="question"
                    value="{{ old('question', $cookie->question) }}" required>
            </div>

            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <textarea class="form-control" id="answer" name="answer" rows="4" required>{{ old('answer', $cookie->answer) }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Update Cookie Policy</button>
            </div>
        </form>
    </div>

@endsection
