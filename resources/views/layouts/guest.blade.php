<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name'))</title>
    @include('layouts.head')
</head>
<body>
    <div id="app">
        @include('layouts.header')
        <main class="py-4 main-frame">
                @yield('content')
        </main>
        @include('layouts.footer')
        
    </div>
    @include('layouts.script')
</body>
</html>
