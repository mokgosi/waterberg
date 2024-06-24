<div class="relative z-10 overflow-hidden pt-[100px] dark:bg-dark md:pt-[130px] lg:pt-[160px]">
        <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke to-stroke/0 dark:via-dark-3"></div>
        <div class="pb-[30px] pt-[30px] bg-blue-100">
          <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
              <div class="w-full px-4">
                <div class="text-center">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                  <h1 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                    {{ $title }}
                  </h1>
                  
                  <p class="mb-5 font-bold text-body-color dark:text-dark-6 uppercase ml-3 mr-3 relative">
                    {{ now()->format('l, j F Y') }} 
                  </p> 
                  

                  <!-- <div class='h-2 w-2 bg-black rounded-full mr-3'></div> -->


                  <ul class="flex items-center justify-center gap-[10px]">
                    <li>
                      <a href="{{ route('page.home') }}" class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white">
                        Home
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="flex items-center gap-[10px] text-base font-medium text-body-color dark:text-dark-6">
                        <span class="text-body-color dark:text-dark-6"> / </span>
                        {{ $title }}
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>    
          </div>
        </div>
    </div>