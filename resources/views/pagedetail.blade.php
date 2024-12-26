<x-layout :$title :$appname>
    <x-navbar :$appname :$navs :navsgroup="$navsGroup"></x-navbar>
    <div class="relative mb-6">
        <img
            src="{{ asset('storage/'.$page->image) }}"
            alt="{{ $page->name }}"
            class="shadow-lg w-full max-h-80 object-cover"
        />
        <div class="absolute flex justify-center items-center w-full h-full left-0 top-0 bg-black bg-opacity-30">
            <h1 class="text-white text-3xl font-semibold">{{$page->title}}</h1>
        </div>
    </div>

    <!-- Render Description as HTML -->
    <div class="text-gray-600 mb-6 px-4 prose max-w-4xl mx-auto">
        {!! $page->description !!}
    </div>
</x-layout>
