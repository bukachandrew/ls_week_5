<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::query()->with('product')->paginate($request->input('per_page', 15));
        return view('admin.pages.orders.index',
            [
                'orders' => $orders,
            ]
        );
    }

    public function create(Request $request)
    {
        $order = new Order();
        $order->product_id = $request->product_id;
        $order->user_email = $request->email;
        $order->user_name = $request->name;
        $order->save();

        \Mail::raw('Новая заявка. Email: '.$request->email . "\n Имя: " . $request->name . "\n id товара:" . $request->product_id, function ($message) {
            $message->to(env('SEND_MAIL'))->subject('Заявка');
        });

        return redirect('/product/'.$request->product_id);
    }
}
