<!-- Top Bar Nav -->
<nav class="w-full py-5 bg-white flex-col shadow-md">
  <div class="w-full container mx-auto flex items-center">
    <nav>
      <ul class="flex items-center align-center justify-between font-medium text-sm text-black uppercase no-underline">
        <li><a class="hover:text-gray-600 px-4" href="#">Login</a></li>
        <li><a class="hover:text-gray-600 px-4" href="{{ route('admin/news/index') }}">Admin</a></li>
      </ul>
    </nav>

    <a class="" href="{{ route('news') }}">
      <div class="flex flex-row justify-center h-10">
        <img class="pr-2" src="{{ asset('img/logo1.svg') }}" alt="" srcset="">
        <img class="py-2" src="{{ asset('img/logo2.svg') }}" alt="" srcset="">
      </div>
    </a>

    <div class="flex text-lg no-underline text-black pr-6 items-center">
      <a class="" href="#">
        <i class="fab fa-facebook"></i>
      </a>
      <a class="pl-6" href="#">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="pl-6" href="#">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="pl-6" href="#">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
  </div>

</nav>