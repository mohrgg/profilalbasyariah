<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = \App\Models\Post::where('is_active', true)
        ->where('published_at', '<=', now())
        ->latest('published_at')
        ->take(3)
        ->get();

    return view('welcome', compact('posts'));
});

Route::get('/berita/{slug}', function ($slug) {
    $post = \App\Models\Post::where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();
    return view('posts.show', compact('post'));
})->name('posts.show');
