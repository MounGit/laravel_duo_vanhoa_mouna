<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;
use App\Models\Feature;
use App\Models\Header;
use App\Models\Portfolio;
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


/*-------------------------------FRONT--------------------------------- */


Route::get('/', function () {
    $portfolio = Portfolio::all();
    $header = Header::all();
    $feature = Feature::all()->take(4);
    return view('front.welcome', compact('portfolio', 'header', 'feature'));
})->name('front');
/*-------------------------------BACKOFFICE----------------------------- */



/*-----------------------DASHBOARD----------------------*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*-----------------------HEADER-------------------------*/

Route::get('/headers', [HeaderController::class, "index"])->name('headers.index');

Route::get('/headers/{id}/edit', [HeaderController::class, "edit"])->name('headers.edit');

Route::put('/headers/{id}/update', [HeaderController::class, "update"])->name('headers.update');


/*-----------------------ABOUT--------------------------*/



/*-----------------------FEATURES-----------------------*/

Route::resource('/features', FeaturesController::class);

/*-----------------------SERVICES-----------------------*/



/*-----------------------PORTFOLIO----------------------*/

Route::resource('/portfolios', PortfolioController::class);

/*-----------------------TESTIMONIALS-------------------*/



/*-----------------------TEAM---------------------------*/



/*-----------------------CONTACT------------------------*/

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

Route::put('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');

/*-----------------------FOOTER-------------------------*/



/*-----------------------USERS--------------------------*/


Route::resource('/users', UserController::class);


require __DIR__.'/auth.php';
