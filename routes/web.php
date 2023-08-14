<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ThankYouController;



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

/*importation de controleurs afin que nous puissions l'utiliser dans la definition de la route
route::get ==> pour definir une route de type get qui correspond a l'url
nous specifions le controleur et la methode qui seront appelles lorsque l'utilisateur acceder a l'url /about nous appelons la methode 'index'
->name ('about)=> pour donner un nom a cette route 
manipile les requetes POST ou affecte la protection CSRF d'une maniere qui entraine une incompatibilite avec le jeton CSRF generer par la formulaire .*/



Route::get('/home', [HomeController::class,'home']);
Route::get('/about', [AboutController::class,'index'])-> name ('about');
Route::get('/package', [PackageController::class,'package']);
Route::get('/book', [BookController::class, 'showForm'])->name('book.form');
Route::post('/book/submit', [BookController::class, 'submitForm'])->name('book.submit')->middleware('custom_middleware');
Route::get('/thankyou', [ThankYouController::class, 'show'])->name('form.thankyou');





Route::get('/', function () {
    return view('home');
});


