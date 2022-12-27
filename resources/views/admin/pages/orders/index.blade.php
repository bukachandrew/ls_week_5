@extends('admin.layouts.app')

@section('content')

    <h1 class="mt-5">Заявки</h1>

    <div class="my-3 p-3 bg-white rounded shadow-sm">

        @foreach($orders as $order)
            <div class="media text-muted pt-3">
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <strong class="text-gray-dark">{{ $order->user_name }}</strong><br>
                            {{ $order->user_email }}<br>
                            <a href="/admin/product/{{ $order->product_id }}">{{ $order->product->title }}</a>
                        </div>
                        <div>
                            <a href="/admin/product/{{ $order->product_id }}" class="btn btn-sm btn-outline-secondary">Просмотр товара</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
