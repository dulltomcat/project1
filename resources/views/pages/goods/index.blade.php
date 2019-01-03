@extends ("layouts.app")
@section("content")

    <a href="/goods/add">Добавить</a>
    <hr>

    <table>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Количество</th>
            <th>Цена</th>
        </tr>
        @foreach($goods as $goods)
            <tr>
                <td>{{ $goods->id }}</td>
                <td>{{ $goods->created_at }}</td>
                <td>{{ $goods->title }}</td>
                <td>{{ $goods->content }}</td>
                <td>
                    <a href="/goods/edit?id={{ $todo->id }}">Редактироать</a>
                    <a href="/goods/delete?id={{ $todo->id }}">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection