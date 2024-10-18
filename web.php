<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Rute untuk halaman depan
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman home
Route::get('/home', function () {
    return view('pakan');
});

// Rute untuk menampilkan halaman about dan mengambil semua posts
Route::get('/pakan', function () {
    $posts = Post::all(); // Menampilkan semua artikel yang telah
    return view('pakan', ['posts' => $posts]); // Pastikan 'about' adalah nama view yang benar
});



// Rute untuk menampilkan halaman ayam
Route::get('/ayam', function () {
    $posts = Post::all(); // Menampilkan semua artikel yang telah
    return view('ayam', ['posts' => $posts]); // Pastikan 'ayam' adalah nama view yang benar
});

// Rute untuk membuat post
Route::post('/create-post', [PostController::class, 'createPost']);

// Rute untuk menampilkan halaman edit
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);

// Rute untuk memperbarui post
Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);

// Rute untuk menghapus post
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);

// Rute untuk menampilkan halaman ayam
Route::get('/penjualan', function () {
    $posts = Post::all(); // Menampilkan semua artikel yang telah
    return view('penjualan', ['posts' => $posts]); // Pastikan 'ayam' adalah nama view yang benar
});

// Rute untuk membuat post
Route::post('/create-post', [PostController::class, 'createPost']);

// Rute untuk menampilkan halaman edit
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);

// Rute untuk memperbarui post
Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);

// Rute untuk menghapus post
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);







