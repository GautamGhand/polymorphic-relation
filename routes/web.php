<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use App\Models\Post;
use App\Models\Video;
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

Route::get('/{post}', function ($post) {
    return view('welcome', [
        'post' => Post::find($post)
    ]);
})->name('welcome');


Route::get('/video/{video}', function ($video) {
    return view('video', [
        'video' => Video::find($video)
    ]);
})->name('welcome.video');



Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');


Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('/videos/store', [VideoController::class, 'store'])->name('videos.store');

