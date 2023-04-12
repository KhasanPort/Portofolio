<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\GameController;
// use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/game', [GameController::class, 'index']);

// Route::get('/register', [UsersController::class, 'index']);

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');


// Route::get('/dashboard', [LoginController::class, 'dashboard']);


// Route::get('/user', [UsersController::class, 'users']);

// Route::post('/user/add', [UsersController::class, 'add']);

// Route::get('/user/edit/{id}', [UsersController::class, 'edit']);

// Route::post('/user/edit/load', [UsersController::class, 'update']);

// Route::get('/user/delete/{id}', [UsersController::class, 'delete']);

// Route::post('/comment/create', [CommentController::class, 'create']);

// Route::post('/comment/update', [CommentController::class, 'update']);

// Route::post('/comment/delete', [CommentController::class, 'add']);

// Route::get('/pukul', function() {
    //     return view('home.portofolio');
// });

// Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');

Route::get('/', [HomeController::class, 'index']);
Route::get('/post', [HomeController::class, 'post']);
Route::get('/posts', [HomeController::class, 'posts']);
Route::get('/posts/{id}', [HomeController::class, 'category']);
Route::get('/category', [HomeController::class, 'categories']);

Route::get('/register', [AdminUsersController::class, 'create'])->middleware('guest');
Route::post('/register', [AdminUsersController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// AUTHORIZATION USER
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
    Route::get('/user/posts', [DashboardController::class, 'posts'])->middleware('auth');
    Route::get('/user/comments', [DashboardController::class, 'comments'])->middleware('auth');

    Route::get('/user/post', [PostController::class, 'index'])->middleware('auth');
    
    Route::get('/user/post/add', [PostController::class, 'create'])->middleware('auth');
    Route::post('/user/post/store', [PostController::class, 'store'])->middleware('auth');
    Route::get('/user/post/edit/{id}', [PostController::class, 'edit'])->middleware('auth');
    Route::post('/user/post/update', [PostController::class, 'update'])->middleware('auth');
    Route::post('/user/post/destroy', [PostController::class, 'destroy'])->middleware('auth');


// AUTHORIZATION ADMIN
    Route::get('/admin/users', [DashboardController::class, 'users'])->middleware('admin');
    Route::get('/admin/statistic', [DashboardController::class, 'statistic'])->middleware('admin');
    Route::post('/user/profile/{id}', [DashboardController::class, 'profile'])->middleware('admin');

    Route::post('/user/add', [AdminUsersController::class, 'show'])->middleware('admin');
    Route::post('/user/edit/{id}', [AdminUsersController::class, 'edit'])->middleware('admin');

    Route::post('/user/update', [AdminUsersController::class, 'update'])->middleware('admin');
    Route::post('/user/destroy/{id}', [AdminUsersController::class, 'destroy'])->middleware('admin');
