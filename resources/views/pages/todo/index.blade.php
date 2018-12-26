@extends ("layouts.app")
@section("content")

    <a href="/todo/add">Добавить</a>
    <hr>

    <table>
        <tr>
            <th>id</th>
            <th>Дата создания</th>
            <th>Название</th>
            <th>Содержание</th>
            <th>Действие</th>
        </tr>
        @foreach($todos as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->created_at }}</td>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->content }}</td>
            <td>
                <a href="/todo/edit?id={{ $todo->id }}">Редактироать</a>
                <a href="/todo/delete?id={{ $todo->id }}">Удалить</a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection