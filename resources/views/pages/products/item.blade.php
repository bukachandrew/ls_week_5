@extends('layouts.app')

@section('content')
    <div class="main-content">

        @include('components.content.top')

        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">{{ $product->title }}</div>
                </div>
                <div class="content-head__search-block">
                    <div class="search-container">
                        <form class="search-container__form">
                            <input type="text" class="search-container__form__input">
                            <button class="search-container__form__btn">search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="product-container">
                    <div class="product-container__image-wrap">
                        <img src="{{ $product->image }}" class="image-wrap__image-product">
                    </div>
                    <div class="product-container__content-text">
                        <div class="product-container__content-text__title">SuperMario</div>
                        <div class="product-container__content-text__price">
                            <div class="product-container__content-text__price__value">
                                Цена: <b>{{ $product->price }}</b> руб
                            </div>

                            <button type="button" class="btn btn-blue" id="myBtn">
                                Купить
                            </button>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>

                                    <form method="POST" action="{{ route('orderCreate') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email ?? '' }}" required="" autocomplete="email" autofocus="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">Имя</label>
                                            <div class="col-md-12">
                                                <input id="name" type="name" class="form-control" name="name" value="{{ $user->name ?? '' }}" required="" autocomplete="name">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Отправить
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>
                        <div class="product-container__content-text__description">
                            {{ $product->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-bottom">
            <div class="line"></div>
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="products-columns">
                    @foreach($products as $product)
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product">
                                <a href="/product/{{ $product->id }}" class="products-columns__item__title-product__link">{{ $product->title }}</a>
                            </div>
                            <div class="products-columns__item__thumbnail">
                                <a href="/product/{{ $product->id }}" class="products-columns__item__thumbnail__link">
                                    <img src="{{ $product->image }}" alt="{{ $product->title }}" class="products-columns__item__thumbnail__img">
                                </a>
                            </div>
                            <div class="products-columns__item__description">
                                <span class="products-price">{{ $product->price }} руб</span>
                                <a href="/product/{{ $product->id }}" class="btn btn-blue">Купить</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
