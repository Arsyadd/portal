
<x-layout :$title :$appname>
    <x-navbar :$appname :$navs :navsgroup="$navsGroup"></x-navbar>
    <x-categories :$categories />

    <section class="py-5 px-5 max-w-screen-xl mx-auto">
        <div class="mb-5">
            @if (request('category'))
                <x-subhead>
                    <x-slot:subtitle>Artikel berdasarkan kategori</x-slot>
                    <x-slot:title>
                        Menampilkan Semua Artikel Yang Berkategori <span class="text-blue-500">{{ Str::headline(request('category')) }}</span>
                    </x-slot>
                </x-subhead>
            @elseif (request('author'))
                <x-subhead>
                    <x-slot:subtitle>Artikel berdasarkan author</x-slot>
                    <x-slot:title>Menampilkan Semua Artikel Dari</x-slot>
                    <div class="text-center mt-5">
                        <img src="/storage/{{$author->image}}" class="w-20 mb-3 mx-auto rounded-full">
                        <h3 class="text-xl font-bold text-gray-700">{{$author->name}}</h3>
                        <h5 class="text-sm text-gray-500">{{$author->profession}}</h5>
                    </div>
                </x-subhead>
            @else
                <x-subhead>
                    <x-slot:subtitle>Semua Artikel</x-slot>
                    <x-slot:title>Silahkan Nikmati Semua Artikel Terbaru Yang Telah Ditulis Author Kami</x-slot>
                </x-subhead>
            @endif
        </div>
        <div class="mb-5">
            <x-search/>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 my-5">
            @foreach ($articles as $article)
                <x-article :$article />
            @endforeach
        </div>
        @if (count($articles) < 1)
            <div class="max-w-lg mx-auto">
                <x-alert>
                    @if (request('search'))
                        Pencarian <b>"{{request('search')}}"</b> Pada
                    @endif
                    Artikel
                    @if (request('category'))
                        Kategori <b>{{Str::headline(request('category'))}}</b>
                    @elseif (request('author'))
                        Dari <b>{{$author->name}}</b>
                    @endif
                    @if (request('search'))
                        Tidak Ditemukan
                    @else
                        Kosong
                    @endif
                </x-alert>
                <div class="text-center">
                    <button onclick="history.back()" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali</button>
                </div>
            </div>
        @endif
        {{ $articles->links() }}
    </section>
</x-layout>
