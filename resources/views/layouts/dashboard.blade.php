@extends('layouts/app')

@section('body')

<body class="bg-white font-family-karla">
    <div class="flex">
        <aside class="h-screen w-80 shadow-xl">
            <div class="h-full flex flex-col justify-between">
                <div class="h-full h-12 bg-gray-900"></div>
                <div class="pt-20 pb-80 w-full bg-blue-700">
                    <div class="flex text-lg h-14 bg-blue-900 text-white font-bold items-center pl-7 ">News</div>
                    <div class="flex text-lg h-14 bg-blue-700 text-white font-bold items-center pl-7 ">Category</div>

                </div>
            </div>

        </aside>
        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <div class="shadow-lg w-full h-24"></div>
                @yield('content')
            
        </div>
    </div>
</body>
@endsection