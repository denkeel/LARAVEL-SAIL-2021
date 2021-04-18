@extends('layouts/dashboard')

@section('content')
@section('title', 'Create')

<x-error-list :errors="$errors"/>

<x-admin-news-form method="POST" :action="route('admin/news/store')" :categories="$categories" />
@endsection