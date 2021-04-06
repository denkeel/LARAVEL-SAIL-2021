@extends('layouts/dashboard')

@section('content')
<x-admin-news-form method="PUT" :action="route('admin/news/update', ['id' => 5])" :oldHeading="'kekw'" :oldContent="'asdf'">
</x-admin-news-form>
@endsection