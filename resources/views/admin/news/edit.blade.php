@extends('layouts/dashboard')

@section('content')
@section('title', 'Editing')

<x-error-list :errors="$errors"/>

@if (session('done'))
<div class="rounded-xl text-lg p-4 ring-4 text-white bg-green-500 ring-green-200"><i class="mr-2 fas fa-check"></i>All changes are saved.</div>
@endif

<x-admin-news-form method="PUT" :action="route('admin/news/update', ['article' => $article->_id])" :oldHeading="$article->heading" :oldContent="$article->content" :categories="$categories" :articleCategory="$article->category">
</x-admin-news-form>
@endsection