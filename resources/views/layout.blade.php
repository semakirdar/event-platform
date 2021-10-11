<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Platforms</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">

            <a class="navbar-brand" href="#">WEEKENDER <br> EVENTS SINGAPORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Visitor guide</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Venue hire</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Support us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Buy tickets</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <form>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
               <p class="now-date float-end">11</p>
            </div>
        </div>
    </div>

</header>


<div>
    @yield('content')
</div>


<footer>

</footer>
<script src="{{ asset('js/app.js') }}"></script>
@if ($errors->any())
    <script>toastr.error('{{ implode(",", $errors->all()) }}')</script>
@endif
</body>
</html>