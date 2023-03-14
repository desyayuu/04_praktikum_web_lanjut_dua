<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('layout.template');
// });

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

//Dashboaard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash');


//Profile
// Route::get('/profile/{profile?}', [ProfileController::class, 'profile'])->name('profile');
Route::prefix('/profile')->group(function(){
    Route::get('/desy', [PostController::class, 'desy'])->name('profileDesy');
    Route::get('/maria', [PostController::class, 'maria'])->name('profileMaria');
});

//Pengalaman 
Route::prefix('pengalaman')->group(function(){
    Route::get('/desy', [PengalamanController::class, 'desy'])->name('desypengalaman');
    Route::get('/maria', [PengalamanController::class, 'maria'])->name('mariapengalaman');
});