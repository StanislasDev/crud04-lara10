<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <title>@ield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="p-10">
            <div class="text-center">
                <h1 class="text-3xl font-bold">CRUD LARAVEL 10</h1>
            </div>
        </div>
        @yield('content')
    </body>
</html>