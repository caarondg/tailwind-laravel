<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <div class="container mx-auto">
            <h2 class="mb-3">This is using grid -- default of tailwind</h2>
            <div class="grid grid-cols-3">
                <div class="text-red">This is red</div>
                <div class="text-red">This is red</div>
                <div class="text-red-100">This is red</div>
                <div class="text-red-200">This is red</div>
                <div class="text-red-300">This is red</div>
                <div class="text-red-400">This is red</div>
                <div class="text-red-500">This is red</div>
                <div>This is red</div>
            </div>

            <hr class="my-5">

            <h2 class="mb-3">This is using flex</h2>
            <div class="flex">
                <div class="w-1/3">This is a 3rd of width</div>
                <div class="w-1/3">This is a 3rd of width</div>
                <div class="w-1/3">This is a 3rd of width</div>
            </div>
        </div>
    </body>
</html>
