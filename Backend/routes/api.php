<?php

use App\Models\Receptek;
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


Route::get('/api/receptek', [Receptek::class, 'index']);
Route::get('/api/receptek/{id}', [Receptek::class, 'show']);
Route::post('/api/receptek', [Receptek::class, 'store']);
Route::put('/api/receptek/{id}', [Receptek::class, 'update']);
Route::delete('/api/receptek/{id}', [Receptek::class, 'delete']);

Route::get('/receptek/list', [Receptek::class, 'listView']);
Route::get('/receptek/new', [Receptek::class, 'newView']);
Route::get('/receptek/edit/{id}', [Receptek::class, 'editView']);
Route::get('/receptek/delete', [Receptek::class, 'deleteView']);
