@extends ("layouts.app")
@section("content")

    <form method="post" action="{{ route('goods.save') }}">
        @csrf
        <label>Название</label><input name="title">
        <label>Текст</label><textarea name="content"></textarea>
        <button type="submit">Сохранить</button>
    </form>

@endsection