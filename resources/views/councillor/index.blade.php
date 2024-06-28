<x-layout>
    <x-slot:title>
        WDM Council
    </x-slot>

    <!-- ====== Section Council-->
    <section id="about" class="bg-white pb-8 dark:bg-dark-2 lg:pb-[70px] lg:py-[70px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">

                    <div class="gap-6 px-4 my-12">
                        <h1 class="text-xl font-bold  border-b-4 border-solid py-4">WDM COUNCIL</h1>
                    </div>

                    <div class="-mx-4 flex flex-wrap justify-center px-4 ">
                        @foreach ($councillors as $councillor )
                        <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                            <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                                <a href="{{ route('councillors.show', $councillor->slug ) }}">
                                    <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                        
                                        @if($councillor->avatar === 'default.jpg')
                                        <div class="relative inline-flex items-center justify-center h-[120px] w-[120px] overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 ring-1 ring-gray-300 dark:ring-gray-500">
                                            <span class="font-medium text-gray-600 dark:text-gray-300">
                                                {{ $councillor->initials }} 
                                            </span>
                                        </div>
                                        @else
                                        <img src="{{ Vite::asset('resources/images/team/team-01.png') }}" alt="team image" class="h-[120px] w-[120px] rounded-full" />
                                        @endif
                                        <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>

                                    </div>
                                    <div class="text-center">
                                        
                                        <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                            {{ $councillor->full_name }}
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

            

</x-layout>    
