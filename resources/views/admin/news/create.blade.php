@extends('layouts/dashboard')

@section('content')
<x-admin-news-form method="POST" :action="route('admin/news/store')" />
@endsection