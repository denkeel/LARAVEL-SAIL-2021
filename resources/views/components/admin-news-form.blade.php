<form class="flex flex-col max-w-3xl space-y-6" action="{{ $action }}" method="post">
    @csrf
    {{ method_field($method  ?? '') }}
    <div class="flex flex-col">
        <label class="font-bold text-lg mb-2" for="category">Category</label>
        <select class="focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent w-4/12 shadow-sm rounded-md p-3" name="category">
            {{-- Supplement an id here instead of using 'name' --}}
            <option class="" value="value1">Category 1</option>
            <option class="" value="value2">Category 2</option>
            <option class="" value="value3">Category 3</option>
        </select>
    </div>
    <div class="flex flex-col">
        <label class="font-bold text-lg mb-2" for="heading">Heading</label>
        <input class="focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent shadow-sm rounded-md p-3" name="heading" type="text" value="{{ $oldHeading ?? ''}}">
    </div>
    <div class="flex flex-col">
        <label class="font-bold text-lg mb-2" for="content">Content</label>
        <textarea class="mb-4 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent shadow-sm rounded-md p-3" name="content" cols="30" rows="10">{{ $oldContent ?? ''}}</textarea>
    </div>
    <button class="hover:shadow-2xl transition-shadow shadow-sm hover:bg-blue-700 text-lg focus:outline-none rounded-md p-3 w-3/12 bg-blue-500 active:bg-blue-800 font-bold text-white" type="submit">Send</button>
</form>