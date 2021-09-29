<?php

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
    return view('front.welcome');
})->name('front');

/*-------------------------------BACKOFFICE----------------------------- */



/*-----------------------DASHBOARD----------------------*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*-----------------------HEADER-------------------------*/

// get index

// get edit -> id 

// put update -> id 

/*-----------------------ABOUT--------------------------*/



/*-----------------------FEATURES-----------------------*/



/*-----------------------SERVICES-----------------------*/



/*-----------------------PORTFOLIO----------------------*/



/*-----------------------TESTIMONIALS-------------------*/



/*-----------------------TEAM---------------------------*/



/*-----------------------CONTACT------------------------*/



/*-----------------------FOOTER-------------------------*/



/*-----------------------USERS--------------------------*/



require __DIR__.'/auth.php';
