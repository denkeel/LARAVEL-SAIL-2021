@extends('layouts/dashboard')

@push('js')
<script src="{{ asset('js/admin/categories/delete.js') }}" defer></script>
<script src="{{ asset('js/admin/categories/edit.js') }}" defer></script>
@endpush

@section('content')

@section('title', 'Users')

<x-error-list :errors="$errors" />

<template x-for="error in list" :key="error">
    <div class="flex items-center rounded-xl text-lg mb-4 p-4 ring-4 text-white bg-red-500 ring-red-200"><i class="mr-2 fas fa-times"></i>
        <p x-text="error"></p>
    </div>
</template>


@foreach ($users as $user)
<div @mousedown.away="isShowing = false;" x-data="{ isShowing: false }" class="flex w-5/12 shadow-sm justify-between rounded-3xl mb-3 py-1.5 @if((isset($user['is_admin'])) && ($user['is_admin'] === true)) ring-blue-500 bg-blue-600 text-white ring-4 @else bg-white @endif">
    <div class="flex flex-row justify-center items-center ml-3">
        <div x-show="!isShowing" class="@if((isset($user['is_admin'])) && ($user['is_admin'] === true)) ring-blue-900 text-white @else h-1 w-1 bg-black @endif rounded mr-2 ml-2">
            @if((isset($user['is_admin'])) && ($user['is_admin'] === true))
            <i class="fas fa-user-tie"></i>
            @endif
        </div>
        <div x-show="isShowing" class="h-1 w-1 @if((isset($user['is_admin'])) && ($user['is_admin'] === true)) ring-blue-900 bg-white text-white @else bg-black @endif rounded"></div>


        <p @dblclick="isShowing = true" x-ref="editP" x-show="!isShowing" class="text-md font-bold">{{ $user['name'] }}</p> {{----}}

        <form $refs.editInput.value=$refs.editP.innerHTML" x-show="isShowing" style="display: none;" class="flex ml-1.5" @submit.prevent="$refs.editP.innerHTML = $refs.editInput.value;isShowing = false; edit('{{ route('admin/users/update', ['user' => $user['_id']]) }}', $refs.editInput.value)">
            {{ method_field('PUT') }}
            <input type="hidden" name="_method" value="AJAX">
            <div class="flex flex-row justify-center items-center">
                {{-- <inputname="user"value="$user['name']" type="text" class="p-1.5 px-2 mr-3 focus:ring-gray-200 border-gray-300 border-2 focus:border-gray-500 focus:ring-4 outline-none focus:outline-none rounded-xl"> --}}
                <input x-ref="editInput" name="name" value="{{ $user['name'] }}" type="text" class="text-black p-1.5 px-2 mr-3 focus:ring-gray-200 shadow-inner focus:border-gray-200 border-gray-200 border outline-none focus:outline-none rounded-xl">

            </div>
            <div class="flex flex-row">
                <button class="flex flex-col font-bold text-white justify-center outline-none focus:outline-none active:bg-green-700 bg-green-500 rounded-xl items-center p-2">OK</button>
            </div>
        </form> {{----}}
    </div>
    <div class="flex flex-row">
        <a class="h-10 w-10 @if((isset($user['is_admin'])) && ($user['is_admin'] === true)) bg-white @endif flex flex-col justify-center hover:bg-gray-800 rounded-xl items-center flex-grow-0 mr-2 text-gray-800 hover:text-white" href="#" @click="isShowing = !isShowing">
            <i class="fas fa-pen"></i>
        </a>
        @if((!isset($user['is_admin'])) || ($user['is_admin'] === false))
        <a class="h-10 w-10 flex flex-col justify-center hover:bg-blue-800 rounded-xl items-center flex-grow-0 mr-2 text-blue-800 hover:text-white" href="{{ route('admin/users/op', ['user' => $user['_id']]) }}">
            <i class="fas fa-user-shield"></i>
        </a>
        @else
        <a class="h-10 w-10 flex flex-col justify-center bg-white hover:bg-black rounded-xl items-center flex-grow-0 mr-2 text-black hover:text-white" href="{{ route('admin/users/deop', ['user' => $user['_id']]) }}">
            <i class="fas fa-user-times"></i>
        </a>
        @endif
        <a class="h-10 w-10 @if((isset($user['is_admin'])) && ($user['is_admin'] === true)) bg-white @endif flex flex-col justify-center hover:bg-red-500 rounded-xl items-center flex-grow-0 mr-3 text-red-600 hover:text-white" href="#" onclick="remove(event, '{{ route('admin/users/destroy', ['user' => $user['_id']]) }}')">
            <i class="text-lg mb-1 fas fa-trash-alt"></i>
        </a>
    </div>
</div>
@endforeach
@endsection