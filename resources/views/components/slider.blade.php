
<section class="px-5">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            @foreach ($slider as $s)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('storage/'.$s->image) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute inset-0 bg-black bg-slider"></div>
                    <!-- Title -->
                    <div class="absolute z-20 max-w-[70%] md:max-w-[50%] lg:max-w-[40%] left-5 lg:left-10 bottom-0 inset-0 text-white">
                        <h3 class="text-lg md:text-2xl p-2 lg:p-4 rounded-lg absolute bottom-10 font-semibold">
                            {{ $s->title }} <br>
                            <a href="/article/{{$s->slug}}" class="bg-blue-500 text-xs lg:text-base text-white px-5 py-2 mt-3 inline-block rounded-full">Baca selengkapnya</a>
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 end-12 z-30 flex items-end pb-10 justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-end pb-10 justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section>
