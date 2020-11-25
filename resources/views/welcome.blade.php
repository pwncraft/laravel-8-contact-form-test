@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        Contact Form
    </div>
    <div class="card-body">
        <a href="{{ route('contact-us')}}">Contact Us</a>
    </div>
</div>
@endsection
