<form action="{{ $action }}" method="post">
    @csrf
    {{ method_field($method  ?? '') }}
    <select name="category">
        {{-- Supplement an id here instead of using 'name' --}}
        <option value="value1">Значение 1</option>
        <option value="value2" selected>Значение 2</option>
        <option value="value3">Значение 3</option>
    </select>
    <input name="heading" type="text" value="{{ $oldHeading ?? ''}}">
    <textarea name="content" cols="30" rows="10">{{ $oldContent ?? ''}}</textarea>
    <button type="submit">Send</button>
</form>