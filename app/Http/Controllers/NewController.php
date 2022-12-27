<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function news(Request $request)
    {
        $news = News::query();
        $news = $news->paginate($request->input('per_page', 15));
        return view('pages.news.index',
            [
                'news' => $news,
            ]
        );
    }

    public function newsItem($id)
    {
        $news = News::where('id', $id)->first();
        return view('pages.news.item',
            [
                'news' => $news,
            ]
        );
    }
}
