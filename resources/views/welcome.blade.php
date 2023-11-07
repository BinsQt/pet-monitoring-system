<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>HappyPaws</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz@8..60&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 'Source Serif 4', serif;

            }
        </style>
    </head>
    <body>
    @include('index/index-header')
    </body>
</html>
