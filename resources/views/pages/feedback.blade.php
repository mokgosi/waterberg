<x-layout>
    <x-slot:title>
        {{ $page->title }}
    </x-slot>

    <!-- ====== Section Start -->
    <section id="about" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay=".2s">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full px-4">
                        <div class="mb-12 max-w-[540px] lg:mb-0">
                            <h2 class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]">
                                {{ $page->title }} 
                            </h2>
                            <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6">
                                {{ $page->content }}    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Section End -->

</x-layout>