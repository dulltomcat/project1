@extends ("layouts.app")
@section("description")

    <form method="post" action="{{ route('goods.update', ['id' => $goods->id]) }}">
        @csrf
        <label>Название</label><input name="title" value="{{ $goods->title }}">
        <label>Описание</label><textarea name="description">{{ $goods->description }}</textarea>
        <button type="submit">Изменить</button>
    </form>

@endsection