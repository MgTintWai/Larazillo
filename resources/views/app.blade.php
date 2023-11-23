<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larazillow</title>
        @routes
        @vite('resources/js/app.js')
    </head>
    <body class="bg-white dark:bg-gray-900 dark:text-gray-300">
        @inertia
    </body>
</html>
