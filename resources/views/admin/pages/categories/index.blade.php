@extends('admin.layouts.app')

@section('content')

    <h1 class="mt-5">Категории</h1>

    <a href="/admin/category/create" class="btn btn-sm btn-success">Создать</a>
    <div class="my-3 p-3 bg-white rounded shadow-sm">

        @foreach($categories as $category)
            <div class="media text-muted pt-3">
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <a href="/admin/category/{{ $category->id }}">
                            <strong class="text-gray-dark">{{ $category->title }}</strong>
                        </a>
                        <div>
                            <a href="/admin/category/{{ $category->id }}" class="btn btn-sm btn-outline-secondary">Просмотр</a>
                            <a href="/admin/category/{{ $category->id }}/edit" class="btn btn-sm btn-outline-secondary">Редактировать</a>
                            <a href="/admin/category/{{ $category->id }}/delete" class="btn btn-sm btn-danger">Удалить</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
