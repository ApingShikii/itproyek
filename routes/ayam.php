// routes/web.php

use App\Http\Controllers\AyamController;

Route::get('/ayam', [AyamController::class, 'showAyamPage']); // Untuk menampilkan halaman ayam
Route::post('/create-ayam-post', [AyamController::class, 'createAyamPost']); // Untuk menambah data ayam
Route::delete('/delete-ayam-post/{post}', [AyamController::class, 'deleteAyamPost']); // Untuk menghapus data ayam
Route::get('/edit-ayam-post/{post}', [AyamController::class, 'showEditAyamPost']); // Untuk mengedit data ayam
Route::post('/update-ayam-post/{post}', [AyamController::class, 'actuallyUpdateAyamPost']); // Untuk memperbarui data ayam
