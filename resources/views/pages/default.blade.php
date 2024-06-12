<x-layout>
    <x-slot:title>
        {{ $page->title }}
    </x-slot>

    <x-slot:slug>
        {{ $page->slug }}
    </x-slot>

    <!-- ====== Section Start Default-->
    <section id="about" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[80px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">
                    <!-- <div class="mb-12  lg:mb-0"> -->
                        <!-- <h2 class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]">
                            {{ $page->title }} 
                        </h2> -->
                        <!-- <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6">
                            {{ $page->content }}    
                        </p>
                    </div> -->


                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full px-4 lg:w-8/12">
                            <div>
                                <h2 class="wow fadeInUp mb-8 text-2xl font-bold text-dark dark:text-white sm:text-3xl md:text-[35px] md:leading-[1.28]" data-wow-delay=".1s
                                    " style="visibility: visible; animation-delay: 0.1s;">
                                    Facing a challenge is kind of a turn-on for an easy rider
                                </h2>
                                <p class="mb-6 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                    There's a time and place for everything… including asking
                                    for reviews. For instance: you should not asking for a
                                    review on your checkout page. The sole purpose of this page
                                    is to guide your customer to complete their purchase, and
                                    this means that the page should be as minimalist and
                                    pared-down possible. You don't want to have any unnecessary
                                    elements or Call To Actions.
                                </p>
                                <p class="mb-8 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                    There's a time and place for everything… including asking
                                    for reviews. For instance: you should not asking for a
                                    review on your checkout page. The sole purpose of this page
                                    is to guide your customer to complete their purchase, and
                                    this means that the page should be as minimalist and
                                    pared-down possible. You don't want to have any unnecessary
                                    elements or Call To Actions.
                                </p>

                            </div>
                        </div>

                        <div class="w-full px-4 lg:w-4/12">
                            <div>
                                <div class="wow fadeInUp relative mb-12 overflow-hidden rounded-[5px] bg-primary px-11 py-[60px] text-center lg:px-8" data-wow-delay=".1s
                                    " style="visibility: visible; animation-delay: 0.1s;">
                                    <h3 class="mb-[6px] text-[28px] font-semibold leading-[40px] text-white">
                                        Join our newsletter!
                                    </h3>

                                    <p class="mb-5 text-base text-white">
                                        Enter your email to receive our latest newsletter.
                                    </p>

                                    <form>
                                        <input type="email" placeholder="Your email address" class="mb-4 h-[50px] w-full rounded-md border border-transparent bg-white/10 text-center text-base text-white outline-none placeholder:text-white/60 focus:border-white focus-visible:shadow-none">
                                        <input type="submit" value="Subscribe Now" class="mb-4 h-[50px] w-full cursor-pointer rounded-md bg-secondary text-center text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-[#0BB489] hover:bg-opacity-90">
                                    </form>

                                    <p class="text-sm font-medium text-white">
                                        Don't worry, we don't spam
                                    </p>
                                </div>

                                <div class="wow fadeInUp mb-12 overflow-hidden rounded-[5px]" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                    <img src="assets/images/blog/bannder-ad.png" alt="image" class="w-full">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ====== Section End -->

</x-layout>