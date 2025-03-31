{{-- resources/views/layout.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">


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
                    <li><a href="{{ route('blog.index')}}" class="hover:text-green-300 transition duration-300">Blog</a></li>
                    <li><a href="{{ route('blog.create')}}" class="hover:text-green-300 transition duration-300">New article</a></li>
                    <li><a href="" class="hover:text-green-300 transition duration-300">Contact</a></li>
                    <li><a href="" class="hover:text-green-300 transition duration-300">Archives</a></li>
                </ul>
            </nav>
        </header>
        
        <div class="px-10 py-5 lg:px-20 lg:py-10">  
            @yield('content')
        </div>   
               
      
    </body>
</html>
