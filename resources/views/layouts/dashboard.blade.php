@extends('layouts/app')

@section('body')

<body class="bg-white font-family-karla">
    <div class="flex">
        <aside class="h-screen w-80 shadow-xl">
            <div class="h-full flex flex-col">
                <div class="flex justify-center items-center flex-col bg-gray-900 py-12">
                    <p class="text-3xl font-bold text-white">Admin Panel</p>
                </div>
                <div class="w-full bg-blue-700 flex-grow">
                    <div class="flex justify-center items-center py-6 mb-4">
                        <a class="bg-white shadow hover:shadow-xl transition-shadow font-bold rounded-xl py-2 px-4" href="{{ route(explode('/', request()->path())[0] . '/' . explode('/', request()->path())[1] . '/create') }}"><i class="mr-2 fas fa-plus"></i>Create</a>
                    </div>
                    <div class="">
                        <a href="{{ route('admin/news/index') }}">
                            <div class="hover:bg-blue-800 active:bg-blue-900 flex text-lg h-14 bg-blue-900 text-white font-bold items-center pl-7 ">News</div>
                        </a>
                        <a href="{{ route('admin/news/index') }}">
                            <div class="hover:bg-blue-800 active:bg-blue-900 flex text-lg h-14 text-white font-bold items-center pl-7 ">Category</div>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <div class="shadow-md bg-white w-full py-8 px-4 z-10"></div>
            <div class="overflow-y-auto p-10 bg-gray-50">
                <h2 class="text-3xl font-bold mb-6">@yield('title')</h2>
                @yield('content')
            </div>
        </div>
    </div>
</body>
@endsection