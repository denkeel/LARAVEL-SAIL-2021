@extends('layouts/news')

@section('content')

<!-- Post Section -->
<section class="w-full md:w-2/3 flex flex-col items-center px-3">

    <article class="flex flex-col shadow-lg rounded-xl my-4">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
            <img class="rounded-t-xl" src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
        </a>
        <div class="flex flex-col justify-start p-10">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $article['category'] }}</a>
            <p class="text-3xl font-bold pb-4"> {{ $article['heading'] }} </p>
            <p href="#" class="text-sm pb-8">
                By <a href="#" class="font-semibold hover:text-gray-800">{{ $article['author'] }}</a>, Published on <x-readable-date-c :date="$article['created_at']"/>
            </p>
            <p class="pb-3">{!! $article['content'] !!}</p>
        </div>
    </article>

    <div class="w-full rounded-xl shadow-lg hover:border-0 flex">
        <a href="#" class="w-1/2 border-r hover:shadow-xl rounded-l-xl transition-shadow duration-500 ease-in-out text-left px-10 py-7">
            <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
            <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
        </a>
        <a href="#" class="w-1/2 hover:shadow-xl rounded-r-xl transition-shadow duration-500 ease-in-out text-right px-10 py-7">
            <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
            <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
        </a>
    </div>

</section>

@endsection