
<x-layout :$title :$appname>
    <x-navbar :$appname :$navs :navsgroup="$navsGroup"></x-navbar>
    <x-categories :$categories />
    <x-slider :$slider />

    <section class="py-12 px-5 max-w-screen-xl mx-auto">
        <div class="mb-2">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Artikel Terbaru</span>
        </div>
        <div class="lg:flex">
            <div class="w-full lg:w-1/2">
                <h2 class="text-gray-700 text-3xl font-bold max-w-md">Artikel terbaru yang mungkin cocok untuk kamu baca</h2>
            </div>
            <div class="hidden lg:block w-full lg:w-1/2">
                <x-search/>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
            @foreach ($latestArticles as $article)
                <x-article :$article />
            @endforeach
        </div>
        <div class="text-end mt-5">
            <a href="/articles" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Lihat lebih banyak artikel</a>
        </div>
    </section>

    <section class="pb-12 pt-0 px-5 lg:px-0">
        <div class="text-center mb-2">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Author Populer</span>
        </div>
        <h2 class="text-gray-700 text-3xl font-bold max-w-lg text-center mx-auto">Beberapa dari mereka yang telah menjadi author untuk kami</h2>

        <div class="max-w-4xl gap-4 mx-auto grid grid-cols-2 lg:grid-cols-4 mt-5">
            @foreach ($author as $athr)
                <x-athr :$athr />
            @endforeach
        </div>
    </section>

    <section class="text-center mb-12">
        <img class="max-w-2xl w-full mx-auto lg:rounded-lg" src="{{ url('storage/'.$ads->image) }}" alt="{{ $ads->image }}">
    </section>
</x-layout>
