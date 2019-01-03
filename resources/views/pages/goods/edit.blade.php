@extends ("layouts.app")
@section("content")

    <form method="post" action="{{ route('goods.update', ['id' => $goods->id]) }}">
        @csrf
        <label>Название</label><input name="title" value="{{ $goods->title }}">
        <label>Текст</label><textarea name="content">{{ $goods->content }}</textarea>
        <button type="submit">Изменить</button>
    </form>

@endsection