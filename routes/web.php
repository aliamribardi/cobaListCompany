<?php

use App\Models\Post;
use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardPostController;

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
    return view('frond.index', [
        'posts' =>Post::all(),
        'category' => Category::all()
    ]);
});

Route::get('/show/{category:id}', function (Category $category) {
    return view('frond.show', [
        'posts' => $category
    ]);
});

Route::get('/detail/{post:id}', function (Post $post) {
    return view('frond.detail', [
        'post' => $post
    ]);
});

// Login

Route::get('/login', function(){
    return view('auth.login');
});

Auth::routes();

// Route::get('/admin', [HomeController::class, 'index']);
Route::get('/admin', [HomeController::class, 'index']);

Route::resource('/dashboard', DashboardPostController::class);

// endLogin