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
        <div class="container  mx-auto">
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
                <div class="-mx-4 flex flex-wrap justify-center">
                    @for ($i = 0; $i < 8; $i++)
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <a href="{{ route('page.agriculture') }}" class="hover:bg-green-600">
                            <div class="group mb-8 bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none hover:bg-green-700 text-dark dark:text-white hover:text-white">
                                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-26">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                </svg>

                                    <!-- <img src="{{ Vite::asset('resources/images/features/briefcase.png') }}" alt="team image" class="h-[120px] w-[120px]" /> -->
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-1 text-lg font-semibold hover:text-white">
                                        Apply for a WDM job
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endfor
                </div>
                


                <!-- careers
                fire department
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                </svg>

                documents

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                </svg>

                speeches 
                idp budget pms -->

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
            @foreach ($councillors as $councillor )
            <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                    <a href="{{ route('councillors.show', $councillor->slug ) }}">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            
                            @if($councillor->avatar === 'default.jpg')
                            <div class="relative inline-flex items-center justify-center h-[120px] w-[120px] overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 ring-1 ring-gray-300 dark:ring-gray-500">
                                <span class="font-medium text-gray-600 dark:text-gray-300">
                                    {{ Str::upper(Str::substr($councillor->first_name,0,1)) }}{{ Str::upper(Str::substr($councillor->last_name,0,1)) }} 
                                </span>

                            </div>
                            @else
                            <img src="{{ Vite::asset('resources/images/team/team-01.png') }}" alt="team image" class="h-[120px] w-[120px] rounded-full" />
                            @endif
                            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>

                        </div>
                        <div class="text-center">
                            
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                {{ $councillor->first_name }} {{ $councillor->last_name }}
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                {{$councillor->portfolio->title }}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
      </div>
    </section>
    <!-- ====== Section End -->

</x-layout>