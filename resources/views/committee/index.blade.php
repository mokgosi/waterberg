<x-layout>
    <x-slot:title>
        WDM Committees
    </x-slot>

    <!-- ====== Section Committees-->
    <section id="about" class="bg-white pb-8 dark:bg-dark-2 lg:pb-[70px] lg:py-[70px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">

                    <div class="gap-6 px-4 my-12">
                        <h1 class="text-xl font-bold  border-b-4 border-solid py-4">STANDING COMMITTEES 2004-2005</h1>
                    </div>

                    <div class="-mx-4 flex flex-wrap justify-center px-4 ">
                        @foreach ($committees as $committee)
                        <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                            <a href="{{ route('committees.show', $committee->slug ) }}">
                            <div class="group mb-8 text-center rounded-xl bg-white px-5 py-8 shadow-testimonial dark:bg-dark dark:shadow-none justify-center hover:bg-green-700">
                                <span class="text-green-800 font-mono italic text-lg group-hover:text-white">
                                    {{ $committee->title }}
                                </span>
                            </div>
                        </a>
                        </div>
                        @endforeach

                    </div>

                    <div class="gap-6 px-4 my-12">
                        <h1 class="text-xl font-bold  border-b-4 border-solid py-4">UPCOMING MEETINGS</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
                        
    <!-- ====== Section End -->
</x-layout>