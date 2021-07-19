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

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/create',[App\Http\Controllers\TeamController::class ,'create'])->name('teams.create');
Route::post('/create',[App\Http\Controllers\TeamController::class ,'store'])->name('teams.store');
Route::get('/', [App\Http\Controllers\TeamController::class ,'maintable']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/allteams', [App\Http\Controllers\TeamController::class ,'bviewtable'])->name('allteam');
Route::get('/teaminfo/{team}', [App\Http\Controllers\TeamController::class ,'show']);


