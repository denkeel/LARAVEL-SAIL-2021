@extends('layouts/dashboard')

@push('js')
<script src="{{ asset('js/admin/categories/delete.js') }}" defer></script>
@endpush

@section('content')
@section('title', 'Categories')
<form action="{{ route('admin/categories/store') }}" method="POST" class="flex w-min shadow-md rounded-3xl mb-4 py-2">
    @csrf
    {{ method_field('POST') }}
    <div class="flex flex-row justify-center items-center ml-3">
        <input name="category" type="text" class="p-1.5 px-2 ring-2 mr-2 ring-blue focus:ring-blue-500 outline-none focus:outline-none rounded-xl">
    </div>
    <div class="flex flex-row">
        <button class="flex flex-col mr-2.5 font-bold text-white justify-center outline-none focus:outline-none active:bg-blue-700 bg-blue-500 rounded-xl items-center p-2">Create</button>
    </div>
</form>
@foreach ($categories as $category)
<div class="flex w-4/12 shadow-md justify-between rounded-3xl mb-4 py-2">
    <div class="flex flex-row justify-center items-center ml-6">
        <div class="h-1.5 w-1.5  bg-black rounded mr-2"></div>
        <p class="text-md font-bold">{{ $category['name'] }}</p>
    </div>
    <div class="flex flex-row">
        <a class="h-10 w-10 flex flex-col justify-center bg-gray-50 hover:bg-red-500 rounded-xl items-center flex-grow-0 mr-3 text-red-600 hover:text-white" href="{{ route('admin/news/edit', ['id' => $category['_id']]) }}">
            <i class="fas fa-pen"></i>
        </a>
        <a class="h-10 w-10 flex flex-col justify-center bg-gray-50 hover:bg-red-500 rounded-xl items-center flex-grow-0 mr-3 text-red-600 hover:text-white" href="#" onclick="remove(event, '{{ route('admin/categories/destroy', ['id' => $category['_id']]) }}')">
            <i class="text-lg mb-1 fas fa-trash-alt"></i>
        </a>
    </div>
</div>
@endforeach
@endsection