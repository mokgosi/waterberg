<x-layout>
    <x-slot:title>
        {{ $page->title }}
    </x-slot>

    <x-slot:slug>
        {{ $page->slug }}
    </x-slot>

    <section id="mining" class="bg-white pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[80px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">
                    <div class="gap-6 px-4 ">
                        <h1 class="text-xl font-bold  border-b-4 border-solid py-4">MINING</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tourism" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[80px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">

                    <div class="gap-6 px-4">
                        <h1 class="text-xl font-bold  border-b-4 border-solid py-4">TOURISM</h1>
                    </div>
                   

                </div>


            </div>
        </div>
    </section>

    <section id="agriculture" class="bg-white pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[80px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">

                    <div class="gap-6 px-4">
                        <h1 class="text-xl font-bold  border-b-4 border-solid py-4">AGRICULTURE</h1>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="infrastructure" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[80px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">

                    <div class="gap-6 px-4">
                        <h1 class="text-xl font-bold  border-b-4 border-solid py-4">INFRASTRUCTURE</h1>
                    </div>

                </div>

            </div>
        </div>
    </section>

</x-layout>