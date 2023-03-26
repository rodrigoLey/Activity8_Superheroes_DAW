<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroesController;

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
    return view('auth.login');
});

//Route::get('/superheroe/edit',[SuperheroesController::class,'edit']);
//Route::get('/superheroe/create',[SuperheroesController::class,'create']);
//Route::get('/superheroe',[SuperheroesController::class,'index']);

Route::resource('superheroe',SuperheroesController::class)->middleware('auth');
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [SuperheroesController::class, 'index'])->name('home');



Route::group(['middleware' => 'auth'], function (){

    Route::get('/', [SuperheroesController::class, 'index'])->name('home');
});
