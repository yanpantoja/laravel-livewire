<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UploadPhoto;
use App\Http\Livewire\{
    ShowTweets,
};

Route::get('/upload', UploadPhoto::class)
            ->name('upload.photo.user')
            ->middleware('auth');
Route::get('/tweets', ShowTweets::class)
            ->name('tweets.index')
            ->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
