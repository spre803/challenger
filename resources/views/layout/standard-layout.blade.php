<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>

        <script src="{{ asset('js/app.js' )}}" defer></script>

        <title>Challenger</title>

    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <div class="container">
                <todos></todos>
            </div>
        </div>


    </body>
</html>
