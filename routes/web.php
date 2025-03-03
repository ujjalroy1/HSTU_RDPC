<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//user
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/registration',[HomeController::class, 'registration'])->name('registration');
Route::post('/registration/save',[HomeController::class, 'registration_save'])->name('registration_save');
Route::get('/registration_list',[HomeController::class, 'registration_list'])->name('registration_list');
Route::get('/payment/create', [HomeController::class, 'payment_create'])->name('payment_create');
Route::post('/payment/store', [HomeController::class, 'payment_save'])->name('payment_save');
Route::get('project-showcase', [HomeController::class, 'project_showcase'])->name('project_showcase');
Route::get('main-registration', [HomeController::class, 'main_registration'])->name('main_registration');
Route::get('gaming-contest', [HomeController::class, 'gaming_contest'])->name('gaming_contest');
Route::get('poster-presentation', [HomeController::class, 'poster_presentation'])->name('poster_presentation');
Route::get('itquiz', [HomeController::class, 'itquiz'])->name('itquiz');


//admin
Route::get('/teams', [TeamController::class, 'index'])->middleware(['auth','admin'])->name('teams.index');
Route::get('/teams/{id}', [TeamController::class, 'show'])->middleware(['auth','admin'])->name('teams.show');
Route::post('/teams/{id}', [TeamController::class, 'update'])->middleware(['auth','admin'])->name('teams.update');


Route::get('schedule',[HomeController::class, 'schedule'])->name('schedule');
Route::get('gellary',[HomeController::class, 'gellary'])->name('gellary');
Route::get('contact',[HomeController::class, 'contact'])->name('contact');

//admin
Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin'])->name('admin.dashboard');
