{{-- resources/views/layout.blade.php --}}

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
            <nav class="container mx-auto">
                <ul class="flex flex-wrap justify-between items-center gap-4">
                    <li><a href="" class="hover:text-green-300 transition duration-300">Blog</a></li>
                    <li><a href="" class="hover:text-green-300 transition duration-300">À propos</a></li>
                    <li><a href="" class="hover:text-green-300 transition duration-300">Contact</a></li>
                    <li><a href="" class="hover:text-green-300 transition duration-300">Archives</a></li>
                </ul>
            </nav>
        </header>
        
        <div class="p-2.5">  
            @yield('content')
        </div>   
               
      
    </body>
</html>
