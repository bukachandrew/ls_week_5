@extends('layouts.app')

@section('content')
    <div class="main-content">

        @include('components.content.top')

        <div class="content-middle">

            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Новости</div>
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
                <div class="news-block content-text">
                    <h3 class="content-text__title">
                        {{ $news->title }}
                    </h3>
                    <img src="{{ $news->image }}" alt="Image" class="alignleft img-news">
                    {{ $news->description }}
                </div>
            </div>

        </div>
        <div class="content-bottom"></div>
    </div>
@endsection
