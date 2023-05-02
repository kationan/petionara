<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MUDEPE</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
        @vite('resources/css/app.css')
        
    </head>
    <body class="container p-4">
        {{-- relative sm:flex sm:justify-top sm:items-center min-h-screen --}}
        <div class="">
            @livewire('header')
           @livewire('content')
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

  