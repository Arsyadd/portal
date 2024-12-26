<a href="/article/{{$article->slug}}">
    <div class="border-2 hover:border-blue-500 rounded-lg p-3 flex gap-2 mb-3">
        <img src="/storage/{{$article->image}}" class="w-20 h-20 object-cover rounded">
        <div>
            <h5 class="text-base font-semibold">{{ Str::limit($article->title, 53, '...') }}</h5>
            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$article->category->name}}</span>
            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$article->author->name}}</span>
        </div>
    </div>
</a>
