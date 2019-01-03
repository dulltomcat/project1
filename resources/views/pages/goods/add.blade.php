@extends ("layouts.app")
@section("content")

    <form method="post" action="{{ route('goods.save') }}">
        @csrf
        <label>Наименование</label><input name="title">
        <label>Описание</label><input name="description">
        <label>Количество</label><input name="number">
        <label>Цена</label><input name="price">
        <button type="submit">Сохранить</button>
    </form>

@endsection