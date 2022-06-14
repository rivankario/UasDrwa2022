<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//kelas//
Route::get('/kelas/all',[App\Http\Controllers\KelasApiController::class, 'all']);

Route::post('/kelas/create',[App\Http\Controllers\KelasApiController::class, 'create']);

Route::post('/kelas/update/{id_kelas}',[App\Http\Controllers\KelasApiController::class, 'update']);

Route::delete('/kelas/delete/{id_kelas}',[App\Http\Controllers\KelasApiController::class, 'delete']);


//mapel//
Route::get('/mapel/all',[App\Http\Controllers\MapelApiController::class, 'all']);

Route::post('/mapel/create',[App\Http\Controllers\MapelApiController::class, 'create']);

Route::post('/mapel/update/{id_mapel}',[App\Http\Controllers\MapelApiController::class, 'update']);

Route::delete('/mapel/delete/{id_mapel}',[App\Http\Controllers\MapelApiController::class, 'delete']);

//jadwal_guru//
Route::get('/jadwalguru/all',[App\Http\Controllers\JadwalGuruApiController::class, 'all']);

Route::post('/jadwalguru/create',[App\Http\Controllers\JadwalGuruApiController::class, 'create']);

Route::post('/jadwalguru/update/{id__jadwal_guru}',[App\Http\Controllers\JadwalGuruController::class, 'update']);

Route::delete('/jadwalguru/delete/{id_jadwal_guru}',[App\Http\Controllers\JadwalGuruController::class, 'delete']);

//Presensi_Harian//
Route::get('/presensiharian/all',[App\Http\Controllers\PresensiHarianApiController::class, 'all']);

Route::post('/presensiharian/create',[App\Http\Controllers\PresensiHarianApiController::class, 'create']);

Route::post('/mapel/update/{id_presensi_harian}',[App\Http\Controllers\PresensiHarianApiController::class, 'update']);

Route::delete('/mapel/delete/{id_presensi_harian}',[App\Http\Controllers\PresensiHarianApiController::class, 'delete']);

//Guru//
Route::get('/guru/all',[App\Http\Controllers\PresensiHarianApiController::class, 'all']);

Route::post('/guru/create',[App\Http\Controllers\PresensiHarianApiController::class, 'create']);

Route::post('/guru/update/{id_guru}',[App\Http\Controllers\PresensiHarianApiController::class, 'update']);

Route::delete('/guru/delete/{id_guru}',[App\Http\Controllers\PresensiHarianApiController::class, 'delete']);

//Presensi_mengajar//
Route::get('/presensimengajar/all',[App\Http\Controllers\PresensiHarianApiController::class, 'all']);

Route::post('/presensimengajar/create',[App\Http\Controllers\PresensiHarianApiController::class, 'create']);

Route::post('/presensimengajar/update/{id_presensi_mengajar}',[App\Http\Controllers\PresensiHarianApiController::class, 'update']);

Route::delete('/presensimengajar/delete/{id_presensi_mengajar}',[App\Http\Controllers\PresensiHarianApiController::class, 'delete']);

//User//
Route::get('/user/all',[App\Http\Controllers\PresensiHarianApiController::class, 'all']);

Route::post('/user/create',[App\Http\Controllers\PresensiHarianApiController::class, 'create']);

Route::post('/user/update/{id_user}',[App\Http\Controllers\PresensiHarianApiController::class, 'update']);

Route::delete('/user/delete/{id_user}',[App\Http\Controllers\PresensiHarianApiController::class, 'delete']);



