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
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Faisal",
        "email" => "faisal@poliban.ac.id",
        "image" => "DSC_8869.jpg",
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Faisal",
            "body" =>  "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque sed eos illum mollitia recusandae maiores maxime esse, veniam ullam possimus quae itaque ipsa eaque ad, numquam facere reiciendis dicta voluptas soluta quas? Ipsa aliquid obcaecati voluptatibus ullam. Corporis inventore et nisi optio! Qui nisi a consequuntur est, vero eius rerum ipsam quaerat, sed quia error aliquam debitis reprehenderit illo, corporis recusandae dolorem excepturi dignissimos natus? Accusamus accusantium, libero quam tenetur qui, inventore doloribus dolore quas, nisi quo tempore nam eveniet!"
        ],
        [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Siapa",
                "body" =>  "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque sed eos illum mollitia recusandae maiores maxime esse, veniam ullam possimus quae itaque ipsa eaque ad, numquam facere reiciendis dicta voluptas soluta quas? Ipsa aliquid obcaecati voluptatibus ullam. Corporis inventore et nisi optio! Qui nisi a consequuntur est, vero eius rerum ipsam quaerat, sed quia error aliquam debitis reprehenderit illo, corporis recusandae dolorem excepturi dignissimos natus? Accusamus accusantium, libero quam tenetur qui, inventore doloribus dolore quas, nisi quo tempore nam eveniet!"
            ],
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman singel post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Faisal",
            "body" =>  "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque sed eos illum mollitia recusandae maiores maxime esse, veniam ullam possimus quae itaque ipsa eaque ad, numquam facere reiciendis dicta voluptas soluta quas? Ipsa aliquid obcaecati voluptatibus ullam. Corporis inventore et nisi optio! Qui nisi a consequuntur est, vero eius rerum ipsam quaerat, sed quia error aliquam debitis reprehenderit illo, corporis recusandae dolorem excepturi dignissimos natus? Accusamus accusantium, libero quam tenetur qui, inventore doloribus dolore quas, nisi quo tempore nam eveniet!"
        ],
        [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Siapa",
                "body" =>  "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque sed eos illum mollitia recusandae maiores maxime esse, veniam ullam possimus quae itaque ipsa eaque ad, numquam facere reiciendis dicta voluptas soluta quas? Ipsa aliquid obcaecati voluptatibus ullam. Corporis inventore et nisi optio! Qui nisi a consequuntur est, vero eius rerum ipsam quaerat, sed quia error aliquam debitis reprehenderit illo, corporis recusandae dolorem excepturi dignissimos natus? Accusamus accusantium, libero quam tenetur qui, inventore doloribus dolore quas, nisi quo tempore nam eveniet!"
            ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;

        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});