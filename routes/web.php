<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
use App\Models\Team;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SectionTitresDescriptionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Feature;
use App\Models\Header;
use App\Models\About;
use App\Models\Footer;
use App\Models\Portfolio;
use App\Models\Service;
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
    $testimonial=Testimonial::all()->take(5);
    $team=Team::all()->take(4);
    $portfolio = Portfolio::all()->take(9);
    $header = Header::all();
    $feature = Feature::all()->take(4);
    $about=About::all()->take(4);
    $service=Service::all()->take(4);
    $footer=Footer::all();
    return view('front.welcome',compact('testimonial','team','portfolio','about','service','footer', 'header', 'feature'));
    
    
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

Route::get('/backoffice/about', [AboutController::class, 'index'])

->name('about');

Route::get('/about/{id}/edit', [AboutController::class, 'edit'])

->name('aboutEdit');

Route::put('/about/{id}/update', [AboutController::class, 'update'])

->name('aboutUpdate');

/*-----------------------FEATURES-----------------------*/

Route::resource('/features', FeaturesController::class);

/*-----------------------SERVICES-----------------------*/

Route::resource('/services', ServiceController::class);

/*-----------------------PORTFOLIO----------------------*/

Route::resource('/portfolios', PortfolioController::class);

/*-----------------------TESTIMONIALS-------------------*/

Route::resource('/backoffice/testimonials',TestimonialController::class);

/*-----------------------TEAM---------------------------*/

Route::resource('backoffice/teams',TeamController::class);

/*-----------------------CONTACT------------------------*/

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

Route::put('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');

/*-----------------------FOOTER-------------------------*/

Route::get('/backoffice/footer', [FooterController::class, 'index'])

->name('footer');

Route::get('/footer/{id}/edit', [FooterController::class, 'edit'])

->name('footerEdit');

Route::put('/footer/{id}/update', [FooterController::class, 'update'])

->name('footertUpdate');

/*-----------------------USERS--------------------------*/


Route::resource('/users', UserController::class);


/*-----------------------Titres--------------------------*/

Route::get('/titre', [SectionTitresDescriptionController::class, 'index'])

->name('titre');

Route::get('/titre/{id}/edit', [SectionTitresDescriptionController::class, 'edit'])

->name('titreEdit');

Route::put('/titre/{id}/update', [SectionTitresDescriptionController::class, 'update'])

->name('titreUpdate');

require __DIR__.'/auth.php';
