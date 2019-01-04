@extends ("layouts.app")
@section("content")

    <form method="post" action="{{ route('goods.save') }}">
        @csrf
        <label>Наименование</label><input name="title" value="{{ old('title') }}">
        <label>Описание</label><input name="description" value="{{ old('description') }}">
        <label>Количество</label><input name="number" value="{{ old('number') }}">
        <label>Цена</label><input name="price" value="{{ old('price') }}">
        <button type="submit">Сохранить</button>
    </form>

    @foreach ($errors->get('title') as $message)
        {{ $message }}
    @endforeach

    @foreach ($errors->get('description') as $message)
        {{ $message }}
    @endforeach

    @foreach ($errors->get('number') as $message)
        {{ $message }}
    @endforeach

    @foreach ($errors->get('price') as $message)
        {{ $message }}
    @endforeach

@endsection