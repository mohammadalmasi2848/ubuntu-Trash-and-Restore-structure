<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>
        @yield('title')
    </title>
</head>
<body>
    @includeIF('layouts.navbar')


    @yield('content')


@yield('js')
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
