@extends('admin.layouts.app')

@section('content')

    <h1 class="mt-5">Изменить категорию</h1>

    <div class="my-3 p-3 bg-white rounded shadow-sm">

        <form method="POST" action="{{ route('categoryUpdate', ['id' => $category->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-12">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $category->title }}" required="">
                </div>
                <div class="col-md-12">
                    <label for="title">Описание</label>
                    <textarea class="form-control" id="title" name="description" placeholder="" required="">{{ $category->description }}</textarea>
                </div>
                <div class="col-md-12">
                    <br>
                    <input type="submit" class="btn btn-primary btn-block"  value="Создать">
                </div>

            </div>
        </form>

    </div>

@endsection
