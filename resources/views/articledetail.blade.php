<x-layout :$title :$appname>
    <x-navbar :$appname :$navs :navsgroup="$navsGroup"></x-navbar>
    <div class="px-4 lg:px-0 lg:max-w-5xl mx-auto py-5 lg:py-16">
        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$article->category->name}}</span>
        <h1 class="text-2xl lg:text-6xl mt-3 mb-6 text-gray-800 font-bold">{{$article->title}}</h1>
        <h5 class="text-xs lg:text-sm mb-6">Created on {{ $article->created_at->format('d M Y') }} by <a href="/articles?author={{$article->author->slug}}" class="text-blue-500">{{ $article->author->name }}</a></h5>
        <img
            src="{{ asset('storage/'.$article->image) }}"
            alt="{{ $article->name }}"
            class="w-full rounded-lg"
        />
        <div class="flex gap-3 lg:gap-10 flex-col lg:flex-row mt-5">
            <div class="w-full lg:w-[65%]">
                <!-- Render Description as HTML -->
                <div class="text-gray-600 prose max-w-3xl">
                    {!! $article->body !!}
                </div>
            </div>
            <div class="w-full lg:w-[35%]">
                <div class="mb-5">
                    <h4 class="text-xl font-semibold mb-2">Artikel Terbaru</h4>
                    @foreach ($newArticles as $nArticle)
                        <x-articleslide :article="$nArticle" />
                    @endforeach
                </div>
                @foreach ($ads as $ad)
                    <img src="/storage/{{$ad->image}}" class="w-full mb-5 rounded">
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
