@extends('admin.layouts.app')

@section('content')

    <h1 class="mt-5">Изменить товар</h1>

    <div class="my-3 p-3 bg-white rounded shadow-sm">

        <form method="POST" action="{{ route('productUpdate', ['id' => $product->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-12">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" required="">
                </div>
                <div class="col-md-12">
                    <label for="price">Цена</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="" value="{{ $product->price }}" required="">
                </div>
                <div class="col-md-12">
                    <label for="title">Описание</label>
                    <textarea class="form-control" id="title" name="description" placeholder="" required="">{{ $product->description }}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="image">Картинка</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="" value="">
                </div>
                <div class="col-md-12">
                    <br>
                    <input type="submit" class="btn btn-primary btn-block"  value="Изменить">
                </div>

            </div>
        </form>

    </div>

@endsection
