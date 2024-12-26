<div class="flex w-full overflow-x-auto gap-3 justify-between py-3 px-5  ">
    @foreach ($categories as $category)
    <a href="/articles?category={{$category->slug}}" class="text-gray-900 bg-white border-2 border-gray-200 focus:outline-none  hover:border-blue-500 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 w-min py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 text-nowrap">
        <img src="{{ url('storage/'.$category->icon) }}" class="w-5 me-2 float-start">
        <span class="text-nowrap inline-block me-7">{{$category->name}}</span>
    </a>
    @endforeach
</div>
