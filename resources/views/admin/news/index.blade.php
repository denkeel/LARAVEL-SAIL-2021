@extends('layouts/dashboard')

@push('js')
<script src="{{ asset('js/delete.js') }}" defer></script>
@endpush

@section('content')
@section('title', 'News')
@foreach ($articles as $article)
<div class="flex shadow-md justify-between rounded-3xl mb-4">
    <div class="flex p-7 flex-row">
        <div class="flex-shrink-0 w-32 h-32 mr-6">
            <img class="min-h-full min-w-full object-cover rounded-xl" src="{{ asset('/img/news.jfif') }}" alt="">
        </div>
        <div class="">
            <div class="text-2xl font-bold text-md mb-3">{{ $article['heading'] }}</div>
            <div class="text-sm mb-6">{{ mb_substr($article['content'], 0, 800) . '...' }}</div>
            <a class="underline hover:bg-gray-800 rounded py-1 hover:text-white px-2" href="{{ route('admin/news/edit', ['id' => $article['_id']]) }}">Edit...</a>
        </div>
    </div>
    <a href="#" onclick="remove(event, '{{ route('admin/news/destroy', ['id' => $article['_id']]) }}')" class="flex flex-col justify-center bg-gray-50 hover:bg-red-500 rounded-r-3xl items-center py-7 px-11 text-red-600 hover:text-white">
        <i class="text-lg mb-1 fas fa-trash-alt"></i>
        <p class="text-md">Delete</p>
    </a>
</div>
@endforeach
@endsection