<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

    <div id="app" ></div>
    <div class="welcome_page">
        <!-- <div class='welcome_page'> -->
        @include('layouts.header_welcome')
        

        <div class="image-space"></div>
    <!-- <img class='img-fluid' src="/images/coffeeGif1.gif" alt="coffee image"> -->
        @include('layouts.footer')
        </div>
    </div>

</html>




