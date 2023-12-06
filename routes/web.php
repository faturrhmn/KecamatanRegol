<?php

use App\Http\Controllers\HomeController;
//Admin
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\IfografiController;
use App\Http\Controllers\ProfilController;
use Illuminate\support\Facades\Route;


Route::get('/', [HomeController::class,'index']);
Route::get('/visi-misi', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/reload-captcha', [HomeController::class,'reloadCaptcha']);
Route::get('/portfolio', [HomeController::class,'portfolio']);
Route::get('/ppids', [HomeController::class,'ppids']);
Route::get('/team', [HomeController::class,'team']);
Route::get('/tugas-dan-fungsi', [HomeController::class,'testimonials']);
Route::get('/sejarah', [HomeController::class,'showsejarah']);
// Route::get('/ifografi', [HomeController::class,'ifografi']);
Route::get('/profil', [HomeController::class,'profil']);
Route::get('/portfolio/{id}', [HomeController::class,'showportfolio'])->name('portfolio.show');
Route::get('/team/{id}', [HomeController::class,'showteam'])->name('team.show');

//auth
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticated']);
Route::get('/logout', [AuthController::class,'logout']);

//dasbo
Route::prefix('/admin')->middleware('auth')->group(function(){

    Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

    Route::resource('sliders', SliderController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('ppids', PpidController::class);
    Route::resource('ifografis', IfografiController::class);
    Route::resource('profils', ProfilController::class);
    
    
    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{contact}', [ContactController::class, 'update']);
    
    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{about}', [AboutController::class, 'update']);

});

