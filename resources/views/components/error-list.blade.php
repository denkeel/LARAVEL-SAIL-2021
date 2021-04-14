@if($errors->any())
@foreach($errors->all() as $error)
<div class="rounded-xl text-lg mb-4 p-4 ring-4 text-white bg-red-500 ring-red-200"><i class="mr-2 fas fa-times"></i>{{ $error }}</div>
@endforeach
@endif