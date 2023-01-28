<?php

use Illuminate\Support\Facades\Route;
use App\Models\Partner;
use App\Models\Apartment;
use App\Models\Blog;
use App\Models\Consumer;
use App\Models\InstagramReels;
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
        'partners' => Partner::all(),
        'apartments' => Apartment::paginate(),
        'blogs' => Blog::all(),
        'consumers' => Consumer::paginate(),
        'instagramReels' => InstagramReels::paginate(),
    ]);
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
