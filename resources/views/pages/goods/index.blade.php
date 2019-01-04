@extends ("layouts.app")
@section("content")

    <a href="/goods/add">Добавить</a>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Наименование</th>
                <th>Описание</th>
                <th>Количество</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
        @foreach($goods as $good)
            <tr>
                <td>{{ $good->id }}</td>
                <td>{{ $good->created_at }}</td>
                <td>{{ $good->title }}</td>
                <td>{{ $good->description }}</td>
                <td>{{ $good->number }}</td>
                <td>{{ $good->price }}</td>
                <td>
                    <a href="/goods/edit?id={{ $good->id }}">Редактироать</a>
                    <a href="/goods/delete?id={{ $good->id }}">Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection