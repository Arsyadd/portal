<div class="max-w-sm bg-white border-2 border-gray-200 rounded-2xl hover:border-blue-500 dark:bg-gray-800 dark:border-gray-700">
    <a class="p-4 block" href="/article/{{$article->slug}}">
        <img class="rounded-lg mb-3" src="{{ url('storage/'.$article->image) }}" alt="{{ $article->image }}" />
        <h5 class="mb-2 text-base lg:text-lg font-bold tracking-tight text-gray-800 dark:text-white">{{ $article->title }}</h5>
        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">{{ $article->category->name }}</span>
        <div class="flex mt-3 items-center gap-3">
            <img class="w-9 h-w-9 rounded-full shadow-lg" src="{{ url('storage/'.$article->author->image) }}" alt="{{ $article->author->name }}"/>
            <h5 class="text-xs lg:text-sm text-gray-700">{{$article->author->name}}</h5>
        </div>
    </a>
</div>
