<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SoulContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\VideoSectionController;


Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/a-propos', fn() => view('AboutUs'))->name('AboutUs');
Route::get('/equipe', fn() => view('team'))->name('team');
Route::get('/blog', fn() => view('blog'))->name('blog');
Route::get('/processus', fn() => view('Process'))->name('Process');

// Routes Spécifiques Soul
Route::get('/a-propos-soul', fn() => view('aboutsoul'))->name('aboutsoul');
Route::get('/groupe-amis', fn() => view('friendband'))->name('friendband');
Route::get('/tele-autisme', fn() => view('teleautism'))->name('teleautism');

// Contact
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::post('/contact-send', [SoulContactController::class, 'send'])->name('contact.send');

// Juridique
Route::get('/politique-confidentialite', fn() => view('privacy-policy'))->name('privacy-policy');
Route::get('/conditions-utilisation', fn() => view('terms-of-service'))->name('terms-of-service');

// --- Authentification ---
Route::get('/connexion', [LoginController::class, 'showLogin'])->name('login');
Route::post('/connexion', [LoginController::class, 'login'])->name('login.post');
Route::post('/deconnexion', [LoginController::class, 'logout'])->name('logout');

Route::get('/inscription', fn() => view('auth.register'))->name('register');
Route::post('/inscription', [RegisterController::class, 'store'])->name('register.post');

// --- Administration (Espace Admin) ---
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard Principal
    Route::get('/tableau-de-bord', [DashboardController::class, 'index'])->name('dashboard');
    
    // Paramètres (Téléphone, Email)
    Route::get('/parametres', [DashboardController::class, 'settings'])->name('settings');
    Route::post('/parametres/update', [DashboardController::class, 'updateSettings'])->name('settings.update');

    // Menu de Navigation
    Route::get('/liens-navigation', [DashboardController::class, 'navLinks'])->name('nav-links');
    Route::post('/liens-navigation/update', [DashboardController::class, 'updateNavLinks'])->name('nav-links.update');

    // Réalisations (Achievements)
    Route::get('/realisations', [DashboardController::class, 'achievements'])->name('achievements');
    Route::post('/realisations/update', [DashboardController::class, 'updateAchievements'])->name('achievements.update');

    Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::put('sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::put('/about/update', [AboutController::class, 'update'])->name('about.update');

    Route::get('/video', [VideoSectionController::class, 'index'])->name('video.index');
    Route::put('/video/update', [VideoSectionController::class, 'update'])->name('video.update');
});



