<x-layout>
    <x-slot:title>
        {{ $councillor->first_name }} {{ $councillor->last_name }}
    </x-slot>
    
    <!-- ====== Section Start Default-->
    <section id="about" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[80px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                
                <div class="w-full px-4">

                    <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                        <div class="col-span-4 sm:col-span-3">
                            <div class="bg-white shadow rounded-lg p-6">
                                <div class="flex flex-col items-center">
                                    <img src="https://randomuser.me/api/portraits/men/94.jpg" class="w-36 h-36 bg-gray-300 rounded-full mb-4 shrink-0"></img>
                                </div>
                                <hr class="my-1 border-t-2 border-dotted border-gray-300">
                                <div class="flex flex-col">
                                    <ul>
                                        <li class="border-b-2 border-dotted py-4 flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                            </svg>  <span class="pl-2">{{ $councillor->phone_number }}</span>
                                        </li>
                                        <li class="border-b-2 border-dotted py-4 flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                            </svg>  <span class="pl-2">
                                                <a href="mail:{{ Str::lower($councillor->email) }}">Send Email</a></span>
                                        </li>
                                        <li class="border-b-2 border-dotted py-4 flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                            </svg> <span class="pl-2">{{ Str::upper($councillor->politicalParty->name) }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4 sm:col-span-9">
                            <div class="bg-white shadow rounded-lg p-6 mb-6">
                                <h1 class="text-xl font-bold">
                                    {{ $councillor->full_name }}
                                </h1>
                                <span class="text-gray-400 mb-4 text-sm">{{ $councillor->portfolio->title }}</span>
                                <p class="text-gray-700 mb-4 mt-4">
                                    Councilor {{ $councillor->full_name }} is a physical therapist by profession. She began her career working in the National Health Service in the UK.  
                                    Upon coming to Boston she worked at Boston Medical Center, The Home for Little Wanderers and Perkins School for the Blind.
                                </p>
                                <p class="text-gray-700 mb-4">
                                    {{ $councillor->full_name }} has been an activist in Allston-Brighton for more than 20 years working with other community 
                                    leaders to preserve the Presentation School Building as a community resource, and to save the Faneuil Branch Library from closure.  
                                    She served on the Board of the Brighton Allston Historical Society and the Presentation School Foundation.  
                                    As Allston Brighton experienced a wave of new development.
                                </p>
                                <p class="text-gray-700 mb-4">
                                    {{ $councillor->full_name }} was a vocal advocate for more affordable housing, preservation and restoration of green space, improvements to mass transportation and stronger public schools. 
                                    As a life long environmentalist the Councilor has worked to find big and small solutions to build a sustainable, diverse, inclusive and resilient urban community.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="gap-6 px-4 my-12">
                        <h1 class="text-xl font-bold  border-b-4 border-solid py-4">COMMITTEES INVOLVED</h1>
                    </div>

                    <div class="-mx-4 flex flex-wrap justify-center px-4 ">
                        @foreach ($councillor->committees as $committee)
                        <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                            <a href="{{ route('committees.show', $committee->slug ) }}">
                            <div class="group mb-8 text-center rounded-xl bg-white px-5 py-8 shadow-testimonial 
                                    dark:bg-dark dark:shadow-none justify-center hover:bg-green-700">
                                
                                
                                <span class="text-green-800 font-mono italic text-lg group-hover:text-white">
                                    {{ $committee->title }}
                                </span>
                            </div>
                        </a>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ====== Section End -->
</x-layout> 