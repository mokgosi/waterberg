<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <title>Waterberg - {{ $title ?? 'District Municipality' }}</title>
        <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.png') }}" type="image/x-icon"/>
        <!-- Styles -->

        @vite([
            'resources/css/swiper-bundle.min.css',
            'resources/css/animate.css',
            'resources/css/app.css',
            'resources/css/tailwind.css',

            'resources/js/wow.min.js',
            'resources/js/swiper-bundle.min.js',
            'resources/js/app.js',
        ])

        <!-- <script>
            new WOW().init();
        </script>  -->

    </head>
    <body>


        
    <!-- ====== Navbar Section Start -->
    @include('partials.nav')
    <!-- ====== Navbar Section End -->

    <!-- ====== Banner Section Start -->
    <div class="relative z-10 overflow-hidden pt-[100px] dark:bg-dark md:pt-[130px] lg:pt-[160px]">
        <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke to-stroke/0 dark:via-dark-3"></div>
        <div class="pb-[30px] pt-[30px] bg-blue-100">
          <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
              <div class="w-full px-4">
                <div class="text-center">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                  <h1 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                    {{ $title }}
                  </h1>
                  <p class="mb-5 text-base text-body-color dark:text-dark-6">
                    There are many variations of passages of Lorem Ipsum available.
                  </p>

                  <ul class="flex items-center justify-center gap-[10px]">
                    <li>
                      <a href="{{ route('page.home') }}" class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white">
                        Home
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="flex items-center gap-[10px] text-base font-medium text-body-color dark:text-dark-6">
                        <span class="text-body-color dark:text-dark-6"> / </span>
                        {{ $title }}
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>    
          </div>
        </div>
    </div>
    <!-- ====== Banner Section End -->

    {{ $slot }}


    <!-- ====== Footer Section Start -->
    <footer class="wow fadeInUp relative z-10 bg-[#090E34] pt-20 lg:pt-[100px]" data-wow-delay=".15s">
        @include('partials.footer')
    </footer>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)" class="back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-green-800 text-white shadow-md transition duration-300 ease-in-out hover:bg-green-700">
      <span class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"></span>
    </a>
    <!-- ====== Back To Top End -->

    @vite([
        'resources/js/main.js',
    ])
    </body>
</html>