<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Reza marchyana",
        "email" => "203040079@unpas.mail.ac.id",
        "image" => "contoh.jpg"

    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reza",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reza",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!"
        ],
    ];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            # code...
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
