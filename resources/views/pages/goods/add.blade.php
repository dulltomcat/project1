@extends ("layouts.app")
@section("description")

    <form method="post" action="{{ route('goods.save') }}">
        @csrf
        <label>Наименование</label><input name="title">
        <label>Описание</label><textarea name="description"></textarea>
    </form>

@section("number")

    <form method="post" action="{{ route('goods.save') }}">
        @csrf
        <label>Наименование</label><input name="title">
        <label>Количество</label><textarea name="number"></textarea>
    </form>

@section("price")

    <form method="post" action="{{ route('goods.save') }}">
        @csrf
        <label>Наименование</label><input name="title">
        <label>Цена</label><textarea name="price"></textarea>
    </form>

@endsection