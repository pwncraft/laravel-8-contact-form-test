@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        Contact Form
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('contact-us-post') }}">
            @csrf
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group row">
                <div class="col-6">
                    <label for="firstName">First Name</label>
                    <input id="firstName" class="form-control @error('firstName') is-invalid @enderror" name="firstName" type="text" value="{{ old('firstName') }}" required />
                </div>
                <div class="col-6">
                    <label for="lastName">Last Name</label>
                    <input id="lastName" class="form-control @error('lastName') is-invalid @enderror" name="lastName" type="text" value="{{ old('lastName') }}" required />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <label for="emailAddress">Email Address</label>
                    <input id="emailAddress" class="form-control @error('emailAddress') is-invalid @enderror" name="emailAddress" type="email" value="{{ old('emailAddress') }}" required />
                </div>
                <div class="col-6">
                    <label for="phoneNumber">Phone Number</label>
                    <input id="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" type="text" value="{{ old('phoneNumber') }}" required />
                </div>
            </div>
            <div class="form-group">
                <label for="mailSubject">Subject</label>
                <input id="mailSubject" class="form-control @error('mailSubject') is-invalid @enderror" name="mailSubject" type="text" value="{{ old('mailSubject') }}" required />
            </div>
            <div class="form-group">
                <label for="mailMessage">Message</label>
                <textarea name="mailMessage" id="mailMessage @error('mailMessage') is-invalid @enderror" rows="5" class="form-control" required>{{ old('mailMessage') }}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Contact Us</button>
        </form>
    </div>
</div>
@endsection
