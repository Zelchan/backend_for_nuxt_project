<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/catFact', [CatController::class, 'getCatFact'])->name('catFact');
Route::get('/catFacts', [CatController::class, 'getCatFacts'])->name('catFacts');
Route::get('/catFacts/{count}', [CatController::class, 'getCatFacts'])->name('catFacts');
