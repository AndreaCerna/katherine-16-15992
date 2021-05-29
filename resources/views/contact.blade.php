<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Progra III</title>
    <!-- Bootstrap CSS -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Proyecto Final</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Menú</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Formulario</a>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
@endif


<!-- formulario -->

    <form method="POST" action="{{ route('contact.store') }}">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

            <!-- Error -->
            @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

            @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

            @if ($errors->has('phone'))
                <div class="error">
                    {{ $errors->first('phone') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                   id="subject">

            @if ($errors->has('subject'))
                <div class="error">
                    {{ $errors->first('subject') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                      rows="4"></textarea>

            @if ($errors->has('message'))
                <div class="error">
                    {{ $errors->first('message') }}
                </div>
            @endif
        </div>

        <button class="btn btn-dark btn-block" type="submit">Send</button>

    </form>
</div>
</body>

</html>
