@extends('layouts/dashboard')

@section('content')
@section('title', 'Create')
<x-admin-news-form method="POST" :action="route('admin/news/store')" />
@endsection