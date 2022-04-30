<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionController;

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
    return view('index');
})->name('home');

Route::get('/contribuer', [GestionController::class, 'contribuer'])->name('page.contribuer');
Route::get('/share', [DataController::class, 'share'])->name('page.share');
Route::post('/share', [DataController::class, 'store'])->name('share.store');

Route::get('/{id}', [GestionController::class, 'details'])->name('page.details');
Route::post('/{id}', [DataController::class, 'comment'])->name('details.store');