<?php

use Illuminate\Support\Facades\Route;
use App\Models\Partner;
use App\Http\Controllers\PartnersController;
use App\Models\Apartment;
use App\Http\Controllers\ApartmentsController;
use App\Models\Blog;
use App\Http\Controllers\BlogsController;
use App\Models\Consumer;
use App\Http\Controllers\ConsumersController;
use App\Models\InstagramReels;
use App\Http\Controllers\InstagramReelsController;
use App\Models\Button;
use App\Http\Controllers\ButtonsController;

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
    return view('welcome',
    [
        'buttons' => Button::all(),
        'partners' => Partner::all(),
        'apartments' => Apartment::paginate(),
        'blogs' => Blog::paginate(4),
        'consumers' => Consumer::paginate(),
        'instagramReels' => InstagramReels::paginate(),
    ]);
})->name('main');

Route::post('/contact_form', \App\Http\Controllers\ContactController::class)->name('contact-form');

Auth::routes();
Route::middleware('auth')
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function (){
        Route::get('/', function (){
            return view('home');
        })->name('index');
        Route::resource('apartments', ApartmentsController::class);
        Route::resource('blogs', BlogsController::class);
        Route::resource('consumers', ConsumersController::class);
        Route::resource('instagramReels', InstagramReelsController::class);
        Route::resource('partners', PartnersController::class);
        Route::resource('buttons', ButtonsController::class);
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
