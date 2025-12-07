<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\SoulContactController;


Route::post('/contact', [SoulContactController::class, 'send'])->name('contact.send');

Route::get('/', fn() => view('home'))->name('home');
Route::get('/friendband', fn() => view('friendband'))->name('friendband');
Route::get('/teleautism', fn() => view('teleautism'))->name('teleautism');
Route::get('/aboutsoul', fn() => view('aboutsoul'))->name('aboutsoul');
Route::get('/blog', fn() => view('blog'))->name('blog');
Route::get('/privacy-policy', fn() => view('privacy-policy'))->name('privacy-policy');
Route::get('/terms-of-service', fn() => view('terms-of-service'))->name('terms-of-service');
Route::get('/AboutUs', fn() => view('AboutUs'))->name('AboutUs');
Route::get('/ChooseUsStart', fn() => view('ChooseUsStart'))->name('ChooseUsStart');
Route::get('/Process', fn() => view('Process'))->name('Process');
Route::get('/team', fn() => view('team'))->name('team');
Route::get('/test', fn() => view('test'))->name('test');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/coom', fn() => view('coom'))->name('coom');


// ✅ تسجيل الدخول والتسجيل
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', fn() => view('auth.register'))->name('register');
Route::post('/register', [RegisterController::class, 'store']);
