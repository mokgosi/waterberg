<x-layout>
    <x-slot:title>
        {{ $committee->title }}
    </x-slot>

    <section id="about" class="bg-white pb-8 dark:bg-dark-2 lg:pb-[70px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">

                    <div class="gap-6 px-4 my-12">
                        <h1 class="text-4xl font-bold text-green-950 font-mono border-b-4 border-dotted py-4">{{ $committee->title }}</h1>
                    </div>

                    <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                        
                        <div class="col-span-4 sm:col-span-9">
                            {{ $committee->content }}
                        </div>

                        <div class="col-span-4 sm:col-span-3 pl-6">
                            <div class="flex flex-col">
                                <ul>
                                    <li class="border-b-2 border-dotted py-4 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                        </svg>
                                        <span class="pl-2">{{ env('COUNCIL_PHONE') }}</span>
                                    </li>
                                    <li class="border-b-2 border-dotted py-4 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                                        </svg>

                                    <!-- <span>F@X</span> -->
                                        <span class="pl-2">{{ env('COUNCIL_FAX') }}</span>
                                    </li>
                                    <li class="border-b-2 border-dotted py-4 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                        </svg>  
                                        <span class="pl-2"><a href="mail:{{ env('COUNCIL_EMAIL') }}">Send Email</a></span>
                                    </li>
                                    <li class="border-b-2 border-dotted py-4 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                        </svg>
                                        <span class="pl-2">{{ env('COUNCIL_ADDRESS') }}</span>
                                    </li>
                                </ul>
                            </div> 
                            <div class="flex flex-col">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        
                        <!-- ====== Section Start Default-->
    <section id="about" class="bg-gray-1 pb-8 dark:bg-dark-2 lg:pb-[70px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">

                    <div class="gap-6 px-4 my-12">
                        <h1 class="text-xl font-bold text-green-950 border-b-4 border-solid py-4">MEMBERS</h1>
                    </div>

                    <div class="-mx-4 flex flex-wrap justify-center px-4 ">
                        @foreach ($committee->councillors as $councillor)
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
            </div>
        </div>
    </section>
    <!-- ====== Section End -->
</x-layout>