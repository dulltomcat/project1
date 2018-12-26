@extends ("layouts.app")
@section("content")

    <form method="post" action="{{ route('todo.update', ['id' => $todo->id]) }}">
        @csrf
        <label>Название</label><input name="title" value="{{ $todo->title }}">
        <label>Текст</label><textarea name="content">{{ $todo->content }}</textarea>
        <button type="submit">Изменить</button>
    </form>

@endsection