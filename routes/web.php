<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
use App\Models\Team;
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
    $testimonial=Testimonial::all();
    $team=Team::all();
    return view('front.welcome',compact('testimonial','team'));
})->name('front');

/*-------------------------------BACKOFFICE----------------------------- */



/*-----------------------DASHBOARD----------------------*/

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*-----------------------HEADER-------------------------*/



/*-----------------------ABOUT--------------------------*/

Route::get('/backoffice/about', [AboutController::class, 'index'])

->name('about');

Route::get('/about/{id}/edit', [AboutController::class, 'edit'])

->name('aboutEdit');

Route::put('/about/{id}/update', [AboutController::class, 'update'])

->name('aboutUpdate');

/*-----------------------FEATURES-----------------------*/



/*-----------------------SERVICES-----------------------*/



/*-----------------------PORTFOLIO----------------------*/



/*-----------------------TESTIMONIALS-------------------*/

Route::resource('/backoffice/testimonials',TestimonialController::class);

/*-----------------------TEAM---------------------------*/

Route::resource('backoffice/teams',TeamController::class);

/*-----------------------CONTACT------------------------*/



/*-----------------------FOOTER-------------------------*/



/*-----------------------USERS--------------------------*/



require __DIR__.'/auth.php';
