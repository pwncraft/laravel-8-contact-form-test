<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        <main role="main" class="container p-3">
            <div class="card mb-3">
                <div class="card-header">
                    Contact Form
                </div>
                <div class="card-body">
                    <form method="POST" action="/contact-us">
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
        </main>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
