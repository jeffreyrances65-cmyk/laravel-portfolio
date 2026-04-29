<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>

@extends('layout')

@section('content')

<div class="container fade-in" style="max-width: 600px;">

    <h1 class="text-center mb-4">Contact Me</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation Errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Contact Form --}}
    <form method="POST" action="/contact">

        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="5" placeholder="Write your message..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Send Message
        </button>

    </form>

</div>

@endsection
</body>
</html>
