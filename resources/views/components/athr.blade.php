<a href="/articles?author={{$athr->slug}}" class="w-full max-w-sm block bg-white border-2 border-gray-200 hover:border-blue-500 rounded-2xl  dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-col items-center py-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ url('storage/'.$athr->image) }}" alt="{{ $athr->name }}"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $athr->name }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $athr->profession }}</span>
    </div>
</a>
