@extends('layouts/dashboard')

@section('content')
<div class="container mx-auto p-10 overflow-y-auto">
    <h2 class="text-3xl font-bold mb-6">News</h2>
    @foreach ($articles as $article)
    <div class="flex shadow-lg p-7 justify-between rounded-xl mb-2">
        <div class="flex-row">
            <div class="text-xl font-bold text-md mb-1">{{ $article['heading'] }}</div>
            <div class="text-sm mb-4">{{ mb_substr($article['content'], 0, 80) . '...' }}</div>
            <a class="underline" href="{{ route('admin/news/edit', ['id' => $article['_id']]) }}">Edit...</a>
        </div>
        <div class="flex items-center pr-3 text-red-600">
            <a href=""><i class="fas fa-trash-alt"></a></i>
        </div>
    </div>
    @endforeach
</div>
@endsection