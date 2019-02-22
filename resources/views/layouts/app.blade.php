<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - Url shortener</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <style>
        body {
            margin: 50px;
        }
    </style>

</head>
<body>
<div class="container h-100">
    <div class="wrapper row align-items-center">
        @yield('content')
    </div>
</div>
</body>
</html>
