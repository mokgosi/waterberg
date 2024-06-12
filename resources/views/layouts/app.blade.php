<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <title>Waterberg - @yield('title')</title>

        

        @vite([
            'resources/css/swiper-bundle.min.css',
            'resources/css/animate.css',
            'resources/css/app.css', 

            'resources/js/wow.min.js'
            'resources/js/swiper-bundle.min.js'
            'resources/js/app.js'
        ])

    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>