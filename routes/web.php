<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about',['name' => 'imam gess' ,'title' => "About"]);
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran', ['title' => 'Pendaftaran']);
});

Route::get('/fasilitas', function () {
    return view('fasilitas', ['title' => 'Fasilitas']);
});

Route::get('/artikel', function () {
    return view('artikel', ['title' => 'Artikel', 'artikel' => Post::all()]);
});

Route::get('/artikel/{post1:slug}', function (Post $post1) {

    // $post1 = Post::find($slug);

    return view('post1', ['title' => 'Single Post', 'post1' => $post1]);

});