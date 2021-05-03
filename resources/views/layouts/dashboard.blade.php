@extends('layouts/app')

@section('body')

<body class="bg-white font-family-karla">
    <div class="flex">
        <aside class="h-screen w-80 shadow-xl">
            <div class="h-full flex flex-col">
                <a class="bg-blue-700 py-6 hover:bg-blue-800" href="{{ route('index') }}">
                    <div class="flex justify-center items-center flex-col ">
                        <img class="h-24 mb-3" src="https://www.pikpng.com/pngl/b/340-3403187_tc-logo-white-techcrunch-logo-white-transparent-clipart.png" alt="" srcset="">
                        <p class="text-md text-white">Main Website</p>
                    </div>
                </a>
                <div class="w-full bg-blue-700 flex-grow">
                    <div class="flex justify-center items-center py-6 mb-4">
                        <a class="bg-white shadow hover:shadow-xl transition-shadow font-bold rounded-xl py-2 px-4" href="{{-- route(explode('/',request()->path())[0].'/'.explode('/',request()->path())[1].'/create') --}}{{ route('admin/news/create') }}"><i class="mr-2 fas fa-plus"></i>Create news</a>
                    </div>
                    <div class="">
                        <a href="{{ route('admin/news/index') }}">
                            <div class="hover:bg-blue-800 active:bg-blue-900 flex text-lg h-14 @if(request()->routeIs('admin/news/*')) bg-blue-900 @endif text-white font-bold items-center pl-7 ">News</div>
                        </a>
                        <a href="{{ route('admin/categories/index') }}">
                            <div class="hover:bg-blue-800 active:bg-blue-900 flex text-lg h-14 @if(request()->routeIs('admin/categories/*')) bg-blue-900 @endif text-white font-bold items-center pl-7 ">Category</div>
                        </a>
                        <a href="{{ route('admin/users/index') }}">
                            <div class="hover:bg-blue-800 active:bg-blue-900 flex text-lg h-14 @if(request()->routeIs('admin/users/*')) bg-blue-900 @endif text-white font-bold items-center pl-7 ">Users</div>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <div class="flex justify-end space-x-2 shadow-md bg-white py-8 px-8 z-10">
                <p class="font-bold" href="{{ route('logout') }}">{{ Auth::user()->name }}</p>
                <p class="hover:text-gray-600" href="{{ route('logout') }}">|</p>

                <form x-data="" x-ref="form" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <p @click="$refs.form.submit()" class="hover:text-gray-600 cursor-pointer">Log out</p>

                </form>
            </div>

            <div x-data="errors" x-on:errors-load.window="lastUpdate = $event" class="main-container transition-all h-full overflow-y-auto p-10 bg-gray-50">
                <h2 class="text-3xl font-bold mb-6">@yield('title')</h2>
                @yield('content')
            </div>
        </div>
    </div>
</body>
@endsection