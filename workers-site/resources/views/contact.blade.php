@extends('layouts.main')

@section('title', 'Contact Us')

@section('main-container')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start contact-pg-section -->
    <section class="contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <p><span>Hotline</span> +92 3225912989 </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-envelope"></i></div>
                                <p><span>Email</span> support@workers.com  </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-clock-o"></i></div>
                                <p><span>Working Hours:</span> 9am to 8pm </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-location-arrow"></i></div>
                                <p><span>Office</span> Raheem Building, Faislabad Road Okara </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col col-md-offset-1 col-md-8">
                @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block p-4 border-left-success">
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block p-4 border-left-danger">
        <strong>{{ $message }}</strong>
    </div>
@endif

<div class="col col-md-offset-1 col-md-8">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block p-4 border-left-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block p-4 border-left-danger">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <form class="contact-form form contact-validation-active row" id="contact-form-s2" method="POST" action="{{ route('contact.store') }}">
        @csrf
        <div class="col col-sm-6">
            <label for="f-name">First Name</label>
            <input type="text" class="form-control" id="f-name" name="f_name" value="{{ old('f_name') }}" required>
            @error('f_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col col-sm-6">
            <label for="l-name">Last Name</label>
            <input type="text" class="form-control" id="l-name" name="l_name" value="{{ old('l_name') }}" required>
            @error('l_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col col-sm-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col col-sm-6">
            <label for="phone">Phone No</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col col-sm-12">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" required>{{ old('message') }}</textarea>
            @error('message')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col col-sm-12 submit-btn">
            <button class="theme-btn" type="submit">Submit</button>
        </div>
    </form>
</div>

                </div>
            </div>
        </div>
    </section>
@endsection
