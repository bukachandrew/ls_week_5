<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = new News();
        $news->title = "О новых играх в режиме VR";
        $news->description = "Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.";
        $news->image = "img/news/ps_vr.jpg";
        $news->save();


        $news = new News();
        $news->title = "О новой PS4 Pro";
        $news->description = "Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.";
        $news->image = "img/news/ps4-pro_01.jpg";
        $news->save();
    }
}
