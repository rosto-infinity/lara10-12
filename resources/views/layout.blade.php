<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
     @vite(['resources/css/app.css', 'resources/js/app.js'])   
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a]  text-[#1b1b18]">
        <header class="p-5 bg-green-700 text-white">
        <nav>
            <ul class="flex gap-2">
                <li><a href="">Blog</a></li>
                <li><a href="">Blog</a></li>
            </ul>
        </nav>
        </header>
        <div class="p-2.5">  
            @yield('content')
        </div>   
               
      
    </body>
</html>
