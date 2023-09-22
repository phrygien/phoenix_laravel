<?php

use App\Http\Controllers\Plateforme\Administration\AdministrationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
* routes pours l'administration du plateforme education
*/
Route::group(['prefix' => 'administration', 'middleware' => 'auth'], function(){
    Route::get('ecole', [AdministrationController::class, 'pageEcole'])->name('administration.ecole');
});
/*
* fin routes pour l'administration du plateforme education
*/