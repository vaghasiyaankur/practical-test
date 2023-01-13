<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Part1Controller;

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
    return redirect()->to('/part1/practical1');
});

Route::get('/part1/practical1', [Part1Controller::class, 'practical1'])->name('practical.1.1');
Route::get('/part1/practical2', [Part1Controller::class, 'practical2'])->name('practical.1.2');
Route::get('/part1/practical3', [Part1Controller::class, 'practical3'])->name('practical.1.3');
Route::get('/part1/practical4', [Part1Controller::class, 'practical4'])->name('practical.1.4');
