<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/home', '/photos');

Route::view('/admin/users', 'admin.users.index');
Route::view('/admin/users/edit', 'admin.users.edit');
Route::view('/photos', 'photos.index');
Route::view('/photos/edit', 'photos.edit');
