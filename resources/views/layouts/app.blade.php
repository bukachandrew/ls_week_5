<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Style -->
    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">

</head>
<body>
<div class="main-wrapper">

    @include('components.header')

    <div class="middle">

        <div class="sidebar">
            @include('components.sidebar.categories')
            @include('components.sidebar.last-news')
        </div>
        @yield('content')

    </div>

    @include('components.footer')

</div>

<script src="/js/main.js"></script>

</body>
</html>
