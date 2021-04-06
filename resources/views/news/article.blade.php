@extends('layouts/news')

@section('content')

<!-- Post Section -->
<section class="w-full md:w-2/3 flex flex-col items-center px-3">

    <article class="flex flex-col shadow-lg rounded-xl my-4">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
            <img class="rounded-t-xl" src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
        </a>
        <div class="flex flex-col justify-start p-10">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $article['category'] }}</a>
            <p class="text-3xl font-bold pb-4"> {{ $article['heading'] }} </p>
            <p href="#" class="text-sm pb-8">
                By <a href="#" class="font-semibold hover:text-gray-800">{{ $article['author'] }}</a>, Published on <x-readable-date-c :dateIso8601="$article['date']"/>
            </p>
            {{-- <h1class="text-2xlfont-boldpb-3">Introduction</h1> --}}
            <p class="pb-3">{{ $article['content'] }}</p>
            {{--  
            <h1 class="text-2xl font-bold pb-3">Heading</h1>
            <p class="pb-3">Vivamus nec facilisis elit, quis congue justo. In non augue ex. Aenean pretium facilisis hendrerit. Sed sed imperdiet dui. Etiam faucibus a diam sed vehicula. Nullam commodo lacus tincidunt, tincidunt orci sed, dapibus leo. Vivamus vulputate quis risus a ultricies. Aliquam luctus id tellus non condimentum. Aenean maximus viverra ipsum eget vestibulum. Morbi ut tincidunt sem, efficitur volutpat tortor. Donec scelerisque, ipsum eu efficitur semper, neque turpis sodales quam, in aliquam elit lacus varius lorem. Ut ut diam id leo efficitur malesuada eget in velit. Pellentesque tristique orci nunc, vitae fermentum nibh luctus eu. Mauris condimentum justo sed ipsum egestas varius.</p>
            <p class="pb-3">Sed sagittis odio a volutpat feugiat. Cras aliquam varius justo, a rhoncus ante bibendum id. Nulla maximus nisl sed enim maximus, ut dictum lectus hendrerit. Fusce venenatis tincidunt eros. Phasellus quis augue vulputate ipsum pellentesque fringilla. Morbi nec tempor felis. Maecenas sollicitudin pellentesque dui, sit amet scelerisque mauris elementum nec. Cras ante metus, mattis in malesuada in, fermentum a nunc. Suspendisse potenti. Sed tempor lacus sed commodo dignissim. Quisque dictum, dolor auctor iaculis cursus, ipsum urna porttitor ex, sed consequat nisi tellus eget ante. Duis molestie mollis eros, eu sollicitudin mauris lobortis quis.</p>
            <p class="pb-3">Vivamus sed neque nec massa scelerisque imperdiet eget id sapien. Fusce elementum mi id malesuada luctus. Proin quis lorem id leo porta interdum non ac nisl. Integer nulla sem, ultrices sed neque eget, blandit condimentum metus. Aliquam eget malesuada sapien. Curabitur aliquet orci sit amet ex tincidunt convallis. Mauris urna mi, consequat mattis mollis a, dignissim eget sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam facilisis sem diam, viverra consequat metus consequat vel. Cras a mi eu ex luctus malesuada quis eu ante. Aliquam erat volutpat.</p>
            <h1 class="text-2xl font-bold pb-3">Conclusion</h1>
            <p class="pb-3">Donec vulputate auctor leo lobortis congue. Sed elementum pharetra turpis. Nulla at condimentum odio. Vestibulum ullamcorper enim eget porttitor bibendum. Proin eros nibh, maximus vitae nisi a, blandit ultricies lectus. Vivamus eu maximus lacus. Maecenas imperdiet iaculis neque, vitae efficitur felis vestibulum sagittis. Nunc a eros aliquet, egestas tortor hendrerit, posuere diam. Proin laoreet, ligula non eleifend bibendum, orci nulla luctus ipsum, dignissim convallis quam dolor et nulla.</p>
            --}}
        </div>
    </article>

    <div class="w-full rounded-xl shadow-lg hover:border-0 flex">
        <a href="#" class="w-1/2 border-r hover:shadow-xl rounded-l-xl transition-shadow duration-500 ease-in-out text-left px-10 py-7">
            <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
            <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
        </a>
        <a href="#" class="w-1/2 hover:shadow-xl rounded-r-xl transition-shadow duration-500 ease-in-out text-right px-10 py-7">
            <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
            <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
        </a>
    </div>

    {{--
    <div class="w-full flex flex-col text-center md:text-left md:flex-row rounded-xl shadow-lg bg-white mt-10 mb-10 py-5 px-10">
        <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
            <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32">
        </div>
        <div class="flex-1 flex flex-col justify-center md:justify-start">
            <p class="font-semibold text-2xl">David</p>
            <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero suscipit suscipit eu eu urna.</p>
            <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
    --}}

</section>

@endsection