@extends ("layouts.app")
@section("content")

    <form method="post" action="{{ route('goods.update', ['id' => $good->id]) }}">
        @csrf
        <label>Наименование</label><input name="title" value="{{ $good->title }}">
        <label>Описание</label><input name="description" value="{{ $good->description }}">
        <label>Количество</label><input name="number" value="{{ $good->number }}">
        <label>Цена</label><input name="price" value="{{ $good->price }}">
        <button type="submit">Изменить</button>
    </form>

@endsection