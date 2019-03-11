@extends ("layouts.app")
@section("content")

    <a href="/goods/add">Добавить</a>
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Наименование</th>
                <th>Описание</th>
                <th>Количество в магазине</th>
                <th>Количество на складе</th>
                <th>Цена</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
        @foreach($goods as $good)
            <tr>
                <td>{{ $good->id }}</td>
                <td>{{ $good->title }}</td>
                <td>{{ $good->description }}</td>
                <td>{{ $good->number_in_store}}</td>
                <td>{{ $good->number_in_stock}}</td>
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