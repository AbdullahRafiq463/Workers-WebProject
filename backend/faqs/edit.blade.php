@extends('layouts.adminmain')

@section('title', 'Edit FAQ')

@section('adminmain-container')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit FAQ</h2>

        {{-- Display Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('backend.faqs.update', $faq) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <input type="text" class="form-control" id="question" name="question"
                    value="{{ old('question', $faq->question) }}" required>
            </div>

            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <textarea class="form-control" id="answer" name="answer" rows="4" required>{{ old('answer', $faq->answer) }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Update FAQ</button>
            </div>
        </form>
    </div>

@endsection
