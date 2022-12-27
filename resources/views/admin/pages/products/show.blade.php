@extends('admin.layouts.app')

@section('content')

    <h1 class="mt-5">Посмотреть товар</h1>

    <div class="my-3 p-3 bg-white rounded shadow-sm">

        <div class="row">

            <div class="col-md-12">
                <label for="title">Название</label>
                <input type="text" class="form-control" id="title" name="title" disabled="" value="{{ $product->title }}" required="">
            </div>
            <div class="col-md-12">
                <label for="price">Цена</label>
                <input type="number" class="form-control" id="price" name="price" disabled="" value="{{ $product->price }}" required="">
            </div>
            <div class="col-md-12">
                <label for="title">Описание</label>
                <textarea class="form-control" id="title" name="description" disabled="" required="" rows="10">{{ $product->description }}</textarea>
            </div>
            <div class="col-md-12">
                <label for="image">Картинка</label><br>
                <img src="{{ $product->image }}" class="bd-placeholder-img mr-2 rounded" style="
                    width: 150px;
                    height: 150px;
                    object-fit: cover;
                ">
            </div>

        </div>


    </div>

@endsection
