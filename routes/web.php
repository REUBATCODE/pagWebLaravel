<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChampionController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/champions')->group(function(){
   Route::get('/', [ChampionController::class, 'index'])->name('champions.list');
   Route::get('/view/{id}', [ChampionController::class, 'view'])->name('champions.view');
   Route::get('/update/{id}', [ChampionController::class, 'update'])->name('champions.update');
   Route::get('/delete/{id}', [ChampionController::class, 'delete'])->name('champions.delete');
   Route::get('/terminate/{id}', [ChampionController::class, 'terminate'])->name('champions.terminate');
   Route::get('/create', [ChampionController::class, 'create'])->name('champions.create');
   Route::post('/create', [ChampionController::class, 'store'])->name('champions.store');

});

