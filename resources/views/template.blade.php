<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('Bifix-shop-logo.svg')}}" type="image/x-icon">

        <title>{{$title}} | Bifix Shop</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Questrial&family=Ranga&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body>
    @include('/components/header')

    @yield('content')

    @include('/components/footer')

    </body>
</html>
