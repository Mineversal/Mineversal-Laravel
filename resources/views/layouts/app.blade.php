<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Mineversal Main Page"/>
        <meta name="author" content="Azhar Rizki Zulma a.k.a Joe Hawk"/>
        <meta name="keywords" content="mineversal,mineversals,keren,gratis,viral,karya,startup,followers,following,berbisnis,roleplay,social media,media sosial,Indonesia,sosial,application,app,android,ios,fun app,app for you,for you,trending">
        <meta name="google-site-verification" content=""/>
        <meta property="og:title" content="Mineversal - Universe in your hand"/>
        <meta property="og:description"content="Mineversal is everything you need"/>
        <meta property="og:image" content=""/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content=""/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Default CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <!-- API Font -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap 5.0.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <!-- Title and Icon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/logo2.ico') }}"/>
        <link rel="apple-touch-icon" href="{{ asset('assets/img/logo2.ico') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body class="bg-dark font-monospace fs-5">
        <!-- Nav Bar -->
        @include('includes.header')

        <!-- Main Content -->
        @yield('content')

        <!-- Footer -->
        @include('includes.footer')
    </body>
</html>
