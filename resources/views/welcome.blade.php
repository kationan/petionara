<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MUDEPE</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
        {{-- <link rel="stylesheet" href="{{asset('build/assets/app-c8ea53d6.css')}}">
        <script src="{{asset('build/assets/app-b9a1a811.js')}}"></script> --}}
        @vite('resources/css/app.css')
        @vite(['resources/css/app.css','resources/js/app.js'])
        
    </head>
    <body class="container md:p-6" style="margin-top:120px">
        {{-- relative sm:flex sm:justify-top sm:items-center min-h-screen --}}
        <div class="">
            @livewire('header')
           @livewire('content')
           @livewire('footer')
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

  