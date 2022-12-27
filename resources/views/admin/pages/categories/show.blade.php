@extends('admin.layouts.app')

@section('content')

    <h1 class="mt-5">Посмотреть категории</h1>

    <div class="my-3 p-3 bg-white rounded shadow-sm">

        <div class="row">

            <div class="col-md-12">
                <label for="title">Название</label>
                <input type="text" class="form-control" id="title" name="title" disabled value="{{ $category->title }}" required="">
            </div>
            <div class="col-md-12">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" disabled="" required="">{{ $category->description }}</textarea>
            </div>

        </div>

    </div>

@endsection
