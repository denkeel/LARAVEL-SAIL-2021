<!-- Top Bar Nav -->
<nav class="w-full py-5 bg-white flex-col">
  <div class="flex w-full container mx-auto justify-between items-center">
    <nav>
      <ul class="flex items-center align-center font-medium text-sm text-black uppercase no-underline">
        <li><a class="hover:text-gray-600 px-4" href="#">Login</a></li>
        <li><a class="hover:text-gray-600 px-4" href="{{ route('admin') }}">Admin</a></li>
      </ul>
    </nav>

    <a class="" href="{{ route('news') }}">
      <div class="flex items-center align-center flex-row justify-center h-10">
      {{--
        <img class="pr-2"src="{{asset('img/logo1.svg') }}" alt="" srcset="">
        <img class="py-2" src="{{ asset('img/logo2.svg') }}" alt="" srcset="">
        {{----}}
        
        <img class="h-36 py-" src="https://startup.info/wp-content/uploads/2020/02/techcrunch-logo-1.png" alt="" srcset="">
        

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