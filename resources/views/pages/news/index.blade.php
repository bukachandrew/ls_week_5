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
                <div class="news-list__container">

                    @foreach($news as $new)
                        <div class="news-list__item">
                            <div class="news-list__item__thumbnail"><img src="{{ $new->image }}"></div>
                            <div class="news-list__item__content">
                                <div class="news-list__item__content__news-title">{{ $new->title }}</div>
                                <div class="news-list__item__content__news-date">{{ $new->created_at }}</div>
                                <div class="news-list__item__content__news-content">
                                    {{ $new->description }}
                                </div>
                            </div>
                            <div class="news-list__item__content__news-btn-wrap"><a href="/news/{{ $new->id }}" class="btn btn-brown">Подробнее</a></div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="content-bottom"></div>
    </div>
@endsection
