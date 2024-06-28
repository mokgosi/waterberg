<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
</svg>


<x-layout>
    <x-slot:title>
       Tenders
    </x-slot>

    <x-slot:slug>
        Tenders
    </x-slot>

    <!-- ====== Latest News-->
    <section class="pt-20 pb-10 lg:pt-[120px] bg-gray-100 lg:pb-20 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap -mx-4">

                <div class="w-full px-4">

                    <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                        @foreach ($tenders as $tender)
                        <div class="col-span-4 sm:col-span-12">
                            <div class="w-full flex px-4 mb-8 bg-white">
                                <div class="flex sm:w-1/2 lg:w-1/2 p-2.5">
                                    <div class="overflow-hidden relative text-dark dark:text-white flex flex-wrap w-full pl-5 pr-5">
                                        <a href="" class="text-dark">
                                            <h1 class="font-mono italic text-green-800 text-2xl">{{ $tender->title }}</h1>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex sm:w-1/2 lg:w-1/2 p-2.5">
                                    <div class="flex sm:w-1/2 lg:w-1/2">
                                        <ul>
                                            <li class="p-4 border-b-2 border-dotted">
                                                <span class="py-2 font-mono italic text-gray-600 pr-4 text-lg">Opening Date:</span>
                                                <span class="py-2 font-mono pr-2">2020-07-30</span>
                                            </li>
                                            <li class="p-4 border-b-2 border-dotted">
                                                <span class="py-2 font-mono italic text-gray-600 pr-4 text-lg">Closing Date:</span>
                                                <span class="py-2 font-mono pr-2">2020-07-30</span>
                                            </li>
                                            <li class="p-4">
                                                <span class="py-2 font-mono italic text-gray-600 pr-4 text-lg">Bids:</span>
                                                <span class="py-2 font-mono pr-2">3</span>
                                            </li>
                                        </ul> 
                                </div>
                            
                                <div class="sm:w-1/2 lg:w-1/2  text-center content-center bg-gray-1 rounded-xl">
                                    <a href="">
                                        <span class="flex justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                            </svg> 
                                        </span>
                                        <span>Download</span>
                                    </a>
                                </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


<!-- 

                @foreach ($tenders as $tender)
                <div class="w-full flex px-4 mb-8 bg-white">
                    <div class="flex sm:w-1/2 lg:w-1/2 p-2.5">
                        <div class="overflow-hidden relative text-dark dark:text-white flex flex-wrap w-full pt-5 pl-5 pr-5">
                            <a href="" class="text-dark">
                                <h1 class="font-mono italic text-green-800 text-2xl">{{ $tender->title }}</h1>
                            </a>
                            <div class="overflow-hidden absolute bottom-0 flex w-full pb-5 pt-5 pr-5">
                                <span class="">Category: dfjadsf a;sldf adsf asldfa flasd flasdf asdf asldf lasdfj lasdf asdf asdfj lasdf lasdf asdfas dfas dflasdf dfjf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex sm:w-1/2 lg:w-1/2 p-2.5">
                        <div class="flex sm:w-1/2 lg:w-1/2">
                            <ul>
                                <li class="p-4 border-b-2 border-dotted">
                                    <span class="py-2 font-mono italic text-gray-600 pr-4 text-lg">Opening Date:</span>
                                    <span class="py-2 font-mono pr-2">2020-07-30</span>
                                </li>
                                <li class="p-4 border-b-2 border-dotted">
                                    <span class="py-2 font-mono italic text-gray-600 pr-4 text-lg">Closing Date:</span>
                                    <span class="py-2 font-mono pr-2">2020-07-30</span>
                                </li>
                                <li class="p-4">
                                    <span class="py-2 font-mono italic text-gray-600 pr-4 text-lg">Bids:</span>
                                    <span class="py-2 font-mono pr-2">3</span>
                                </li>
                            </ul> 
                        </div>
                        <div class="sm:w-1/2 lg:w-1/2  text-center content-center bg-gray-1 rounded-xl">
                            <a href="">
                                <span class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg> 
                                </span>
                                <span>Download</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach -->
                
            </div>
        </div>
    </section>
    <!-- ====== End Latest News-->
</x-layout>