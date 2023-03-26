<?php

use App\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;
use ourcodeworld\NameThatColor\ColorInterpreter;

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

    return redirect('/colors');
});

Route::get('colors', [ColorController::class, 'seeAll']);
Route::post('colors', [ColorController::class, 'addColor']);
Route::get('colors/{color}', [ColorController::class, 'seeColor'])->where(['color' => '[0-9]+']);
Route::put('colors/{color}', [ColorController::class, 'updateColor'])->where(['color' => '[0-9]+']);
Route::delete('colors/{color}', [ColorController::class, 'deleteColor'])->where(['color' => '[0-9]+']);
Route::get('colors/{color}/edit', [ColorController::class, 'editColor'])->where(['color' => '[0-9]+']);
Route::get('colors/create', [ColorController::class, 'createColor']);
