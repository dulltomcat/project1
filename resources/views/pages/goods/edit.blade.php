@extends ("layouts.app")
@section("content")

    <form method="post" action="{{ route('goods.update', ['id' => $good->id]) }}">
        @csrf
        <label>Наименование</label><input name="title" value="{{ $good->title }}">
        <label>Описание</label><input name="description" value="{{ $good->description }}">
        <label>Количество в магазине</label><input name="number_in_store" value="{{ $good->number_in_store }}">
        <label>Количество на складе</label><input name="number_in_stock" value="{{ $good->number_in_stock }}">
        <label>Цена</label><input name="price" value="{{ $good->price }}">
        <button type="submit">Изменить</button>
    </form>

@endsection