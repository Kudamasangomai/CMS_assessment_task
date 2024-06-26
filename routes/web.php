<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SiteSettingsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;

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


Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Auth::routes();


Route::group(['middleware'=>'auth'], function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/site_settings',SiteSettingsController::class);
    Route::post('/site_settings/{id}/publish',[SiteSettingsController::class,'publish'])->name('site_settings.publish');

    Route::resource('/footer',FooterController::class);
    Route::post('/footer/{id}/publish',[FooterController::class,'publish'])->name('footer.publish'); 
    
    Route::resource('/hero',HeroController::class);
    Route::resource('/price',PriceController::class);
    Route::resource('/about',AboutController::class);
    Route::resource('/services',ServiceController::class);

    
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });



