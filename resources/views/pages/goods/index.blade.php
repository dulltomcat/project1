@extends ("layouts.app")
@section("description")

    <a href="/goods/add">Добавить</a>
    <hr>

    <table>
        <tr>
            <th>id</th>
            <th>Дата создания</th>
            <th>Название</th>
            <th>Содержание</th>
            <th>Действие</th>
        </tr>
        @foreach($goods as $goods)
            <tr>
                <td>{{ $goods->id }}</td>
                <td>{{ $goods->created_at }}</td>
                <td>{{ $goods->title }}</td>
                <td>{{ $goods->content }}</td>
                <td>
                    <a href="/goods/edit?id={{ $goods->id }}">Редактироать</a>
                    <a href="/goods/delete?id={{ $goods->id }}">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection