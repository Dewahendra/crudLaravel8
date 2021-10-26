<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Purnama_tilemController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('purnama_tilemberanda',Purnama_tilemController::class);

Route::get('/purnama_tilem', function () {
    return view('purnama_tilem');
});

Route::get('/suka_duka', function () {
    return view('suka_duka');
});

Route::get('/dana_punia', function () {
    return view('dana_punia');
});

Route::get('/jumlah_kas', function () {
    return view('jumlah_kas');
});


require __DIR__.'/auth.php';
