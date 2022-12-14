<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('home');
});

Route::get('/about', function() {
    return view("about");
});

Route::get('/berita', [BeritaController::class, "index"]);
Route::get("/berita/{slug}", [BeritaController::class, "show"]);

// auth
Route::get('/login', [LoginController::class, 'index'])->name("login")->middleware("guest");
Route::post('/login/authenticate', [LoginController::class, 'create'])->name('login-auth');
Route::get('/register', [RegisterController::class, 'index'])->name("register")->middleware("guest");
Route::post('/register/new', [RegisterController::class, 'create'])->name('new-user');
Route::post('/logout', [LoginController::class, 'logout']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// dashboard
Route::get("/dashboard/berita", [DashboardBeritaController::class, 'index'])->middleware("auth");
Route::get('/dashboard/berita/detail/{slug}', [DashboardBeritaController::class, 'show'])->middleware('auth');
Route::get('/dashboard/berita/new', [DashboardBeritaController::class, 'create'])->middleware('auth');
Route::post('/dashboard/berita/create', [DashboardBeritaController::class, 'store'])->middleware("auth");
Route::delete('/dashboard/berita/delete/{id}', [DashboardBeritaController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/berita/edit/{id}', [DashboardBeritaController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/berita/update/{id}', [DashboardBeritaController::class, 'update'])->middleware("auth");

// kategori
Route::get('/dashboard/kategori', [DashboardKategoriController::class, 'index'])->middleware("auth");
Route::delete('/dashboard/berita/delete/{id}', [DashboardKategoriController::class, 'destroy'])->middleware("auth");
Route::get('/dashboard/kategori/create', [DashboardKategoriController::class, 'create'])->middleware("auth");
Route::post('/dashboard/kategori/new', [DashboardKategoriController::class, 'store'])->middleware("auth");
Route::get('/dashboard/kategori/update/{id}', [DashboardKategoriController::class, 'edit']);
Route::put('/dashboard/kategori/put/{id}', [DashboardKategoriController::class, 'update'])->middleware("auth");