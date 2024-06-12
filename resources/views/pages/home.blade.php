<x-layout>
    <x-slot:title>
        Waterberg District Municipality
    </x-slot>

    <x-slot:slug>
        Waterberg District Municipality
    </x-slot>

    <!-- ====== Local Municipalities-->
    <section class="pt-10 pb-10 lg:pt-[50px] bg-green-800 lg:pb-10 dark:bg-dark">
        <div class="container">
            <div class="grid grid-cols-6 gap-2">
                @for ($i = 0; $i < 6; $i++)
                <div class="">
                    <div class="relative z-10 mx-auto mb-5 h-[150px] w-[150px] md:w-1/2">
                        <img src="{{ Vite::asset('resources/images/blog/default_news.svg') }}" alt="team image" class="h-[150px] w-[150px]">
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- ====== End Local Municipalities-->







    <!-- ====== Latest News-->
    <section class="pt-20 pb-10 lg:pt-[120px] bg-white lg:pb-20 dark:bg-dark">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                    <span class="mb-2 block text-lg font-semibold text-green-800">
                    Featured Resources
                    </span>
                    <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                    Featured Resources
                    </h2>
                    <p class="text-base text-body-color dark:text-dark-6">
                    There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.
                    </p>
                </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                
                careers
                fire department
                documents
                speeches 
                idp budget pms

            </div>
        </div>
    </section>
    <!-- ====== End Latest News-->













































    <!-- ====== Latest News-->
    <section class="pt-20 pb-10 lg:pt-[120px] bg-gray-100 lg:pb-20 dark:bg-dark">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                    <span class="mb-2 block text-lg font-semibold text-green-800">
                    Latest News
                    </span>
                    <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                    Latest News
                    </h2>
                    <p class="text-base text-body-color dark:text-dark-6">
                    There are many variations of passages of Lorem Ipsum available
                    but the majority have suffered alteration in some form.
                    </p>
                </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                
                @for ($i = 0; $i < 4; $i++)
                <div class="w-full px-4 md:w-1/2 lg:w-1/2 mb-8">

                    <div class="overflow-hidden flex w-full bg-white">
                        <div class="overflow-hidden w-full md:w-1/2 lg:w-[250px]">
                            <a href="blog-details.html" class="font-bold text-dark">
                                <img src="{{ Vite::asset('resources/images/blog/default_news.svg') }}" alt="image" class="w-full">
                            </a>
                        </div>
                        <div class="overflow-hidden relative text-dark dark:text-white flex flex-wrap w-full pt-5 pl-5 pr-5">
                            <a href="blog-details.html" class="text-dark">
                                I think really important to design with... I think really important to design with...
                            </a>

                            <div class="overflow-hidden absolute bottom-0 flex w-full pb-5 pt-5 pr-5">
                                <span class="">Category</span>
                                <span class="">JUL 20</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="px-4 md:w-1/2 lg:w-1/2 mb-10 group relative" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                        <svg class="absolute w-[90px] top-[-5px] pl-4 text-center text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.08 44.31">
                            <title>
                                <time datetime="2024-06-07T18:34:37Z">Jun 7</time>
                            </title>
                            <path d="M32.26,42.16l-15.3-7-15.3,7v-40h30.6Z" fill="#ffffff" stroke="#ECECEC" stroke-miterlimit="10"></path>
                        </svg>
                        <p class="absolute w-[70px] left-5 text-center uppercase p-4 font-bold z-20">
                            <time datetime="2024-06-07T18:11:10Z">
                                Jun 7
                            </time>
                        </p>
                        
                        <div class="mb-8 overflow-hidden ">
                            <a href="blog-details.html" class="block">
                                <img src="https://play-tailwind.tailgrids.com/assets/images/blog/blog-01.jpg" alt="image" class="w-full">
                            </a>
                        </div>
                        
                    </div>-->
                </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- ====== End Latest News-->

    <!-- ====== Meet The Mayor-->
    <section id="team" class="overflow-hidden pb-12 pt-20 dark:bg-dark-2 lg:pb-[90px] lg:pt-[120px]" >
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="mb-2 block text-lg font-semibold text-green-800">
                Meet The Mayor
              </span>
              <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                WDM Mayor
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="-mx-4 flex flex-wrap justify-left">
            <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                <div class="group mb-8  bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                    <div class="relative z-10 mx-auto mb-5 h-[150px] w-[150px]">
                        <img src="{{ Vite::asset('resources/images/team/team-01.png') }}" alt="team image" class="h-[150px] w-[150px]" />
                        <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>

                    </div>
                    <div class="text-center">
                        <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                            Melissa Tatcher
                        </h4>
                        <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                            Mayor
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 sm:w-1/2 lg:w-3/4 xl:w-3/4">
                <div class="text-left">
                    <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                        Melissa Tatcher
                    </h4>
                    <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                        Mayor
                    </p>
                    <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                        Mayor of Boston. She is a daughter of immigrants, Boston Public Schools mom to two boys, MBTA commuter, and fierce believer that we can solve our deepest challenges through building community. 
                    </p>
                    <div class="flex items-center pr-16 lg:pr-0">
                        <div class="hidden sm:flex">
                            <a href="http://localhost/contact" class="px-4 py-1 text-base font-medium text-white duration-300 ease-in-out rounded-md signUpBtn bg-green-800 hover:bg-green-700">
                                LEARN ABOUT THE MAYOR
                            </a>
                        </div>
                    </div>
                </div>
            </div>   

        </div>
      </div>
    </section>
    <!-- ====== Section End -->

    <!-- ====== Section Start Default-->
    <section id="team" class="overflow-hidden bg-gray-1 pb-12 pt-20 dark:bg-dark-2 lg:pb-[90px] lg:pt-[120px]" >
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="mb-2 block text-lg font-semibold text-green-800">
                Meet The Council
              </span>
              <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                WDM Council
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
              
            </div>
          </div>
        </div>

        <div class="-mx-4 flex flex-wrap justify-center">
            @for ($i = 0; $i < 8; $i++)
            <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                    <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                        <img src="{{ Vite::asset('resources/images/team/team-01.png') }}" alt="team image" class="h-[120px] w-[120px] rounded-full" />
                        <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>

                    </div>
                    <div class="text-center">
                        <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                            Melissa Tatcher
                        </h4>
                        <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                            Marketing Expert
                        </p>
                    </div>
                </div>
            </div>
            @endfor

        </div>
      </div>
    </section>
    <!-- ====== Section End -->

</x-layout>