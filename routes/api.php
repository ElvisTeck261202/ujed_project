<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/fes1', 'App\Http\Controllers\fes1Controller@index');
Route::post('/fes1', 'App\Http\Controllers\fes1Controller@store');
Route::put('/fes1/{CVE_INC}', 'App\Http\Controllers\fes1Controller@update');
Route::delete('fes1/{CVE_INC}', 'App\Http\Controllers\fes1Controller@destroy');