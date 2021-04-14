@extends('layouts/dashboard')

@push('js')
<script src="{{ asset('js/admin/categories/delete.js') }}" defer></script>
<script src="{{ asset('js/admin/categories/edit.js') }}" defer></script>
@endpush

@section('content')

@section('title', 'Categories')

<x-error-list :errors="$errors" />

<form action="{{ route('admin/categories/store') }}" method="POST" class="flex w-min shadow-sm rounded-3xl mb-5 py-3 px-4">
    @csrf
    <div class="flex flex-row justify-center items-center">
        <input name="name" type="text" class="p-1.5 px-2 mr-3 focus:ring-blue-200 border-blue-300 border-2 focus:border-blue-500 focus:ring-4 outline-none focus:outline-none rounded-xl">
    </div>
    <div class="flex flex-row">
        <button class="flex flex-col font-bold text-white justify-center outline-none focus:outline-none active:bg-blue-700 bg-blue-500 rounded-xl items-center p-2">Create</button>
    </div>
</form>
@foreach ($categories as $category)
<div @mousedown.away="isShowing = false;" x-data="{ isShowing: false }" class="flex w-5/12 bg-white shadow-sm justify-between rounded-3xl mb-3 py-1.5">
    <div class="flex flex-row justify-center items-center ml-3">
        <div x-show="!isShowing" class="h-1 w-1  bg-black rounded mr-2 ml-2"></div>
        <div x-show="isShowing" class="h-1 w-1  bg-black rounded"></div>

        <p @dblclick="isShowing = true" x-ref="editP" x-show="!isShowing" class="text-md font-bold">{{ $category['name'] }}</p> {{----}}

        <form $refs.editInput.value=$refs.editP.innerHTML" x-show="isShowing" class="flex ml-1.5" @submit.prevent="$refs.editP.innerHTML = $refs.editInput.value;isShowing = false; edit('{{ route('admin/categories/update', ['category' => $category['_id']]) }}', $refs.editInput.value)">
            {{ method_field('PUT') }}
            <input type="hidden" name="_method" value="AJAX">
            <div class="flex flex-row justify-center items-center">
                {{-- <inputname="category"value="$category['name']" type="text" class="p-1.5 px-2 mr-3 focus:ring-gray-200 border-gray-300 border-2 focus:border-gray-500 focus:ring-4 outline-none focus:outline-none rounded-xl"> --}}
                <input x-ref="editInput" name="name" value="{{ $category['name'] }}" type="text" class="p-1.5 px-2 mr-3 focus:ring-gray-200 shadow-inner focus:border-gray-200 border-gray-200 border outline-none focus:outline-none rounded-xl">

            </div>
            <div class="flex flex-row">
                <button class="flex flex-col font-bold text-white justify-center outline-none focus:outline-none active:bg-green-700 bg-green-500 rounded-xl items-center p-2">OK</button>
            </div>
        </form> {{----}}
    </div>
    <div class="flex flex-row">
        <a class="h-10 w-10 flex flex-col justify-center hover:bg-gray-800 rounded-xl items-center flex-grow-0 mr-2 text-gray-800 hover:text-white" href="#" @click="isShowing = !isShowing">
            <i class="fas fa-pen"></i>
        </a>
        <a class="h-10 w-10 flex flex-col justify-center hover:bg-red-500 rounded-xl items-center flex-grow-0 mr-3 text-red-600 hover:text-white" href="#" onclick="remove(event, '{{ route('admin/categories/destroy', ['category' => $category['_id']]) }}')">
            <i class="text-lg mb-1 fas fa-trash-alt"></i>
        </a>
    </div>
</div>
@endforeach
@endsection