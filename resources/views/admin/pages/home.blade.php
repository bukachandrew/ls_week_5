@extends('admin.layouts.app')

@section('content')

    <h1 class="mt-5">Админка</h1>
    <p>
        <a class="btn btn-primary my-2" href="/admin/category">Категории</a>
        <a class="btn btn-primary my-2" href="/admin/product">Товары</a>
        <a class="btn btn-primary my-2" href="/admin/orders">Заказы</a>
        <a class="btn btn-primary my-2" href="/admin/setting">Настройки</a>
    </p>
@endsection
