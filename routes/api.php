<?php

use App\Http\Controllers\API\MahasiswaController;
use App\Http\Controllers\API\ObatController;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('mahasiswa',[MahasiswaController::class,'index']);
Route::post('mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('mahasiswa/show/{id}',[MahasiswaController::class,'show']);
Route::post('mahasiswa/update/{id}',[MahasiswaController::class,'update']);
Route::get('mahasiswa/destroy/{id}',[MahasiswaController::class,'destroy']);

//Obat
Route::get('obat',[ObatController::class,'index']);
Route::post('obat/store',[ObatController::class,'store']);
Route::get('obat/show/{id}',[ObatController::class,'show']);
Route::post('obat/update/{id}',[ObatController::class,'update']);
Route::get('obat/destroy/{id}',[ObatController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
