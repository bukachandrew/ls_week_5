@extends('admin.layouts.app')

@section('content')

    <h1 class="mt-5">Товары</h1>

    <a href="/admin/product/create" class="btn btn-sm btn-success">Создать</a>
    <div class="my-3 p-3 bg-white rounded shadow-sm">

        @foreach($products as $product)
            <div class="media text-muted pt-3">
                <img src="{{ $product->image }}" class="bd-placeholder-img mr-2 rounded" style="
                    width: 50px;
                    height: 50px;
                    object-fit: cover;
                ">
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <a href="/admin/product/{{ $product->id }}">
                            <strong class="text-gray-dark">{{ $product->title }}</strong>
                        </a>
                        <div>
                            <a href="/admin/product/{{ $product->id }}" class="btn btn-sm btn-outline-secondary">Просмотр</a>
                            <a href="/admin/product/{{ $product->id }}/edit" class="btn btn-sm btn-outline-secondary">Редактировать</a>
                            <a href="/admin/product/{{ $product->id }}/delete" class="btn btn-sm btn-danger">Удалить</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
