@extends ("layouts.app")
@section("content")

    <form method="post" action="{{ route('goods.save') }}">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Наименование</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title">
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Описание</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="6" name="description"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Количество в магазине</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="number_in_store">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Количество на складе</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="number_in_stock">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Цена</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="price">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

    <form>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
    </form>

@endsection