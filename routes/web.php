<?php
use App\Http\Controllers\TariIndonesiaController;
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

Route::get('/', [TariIndonesiaController::class, 'index' ] );
Route::get('/tambah', [TariIndonesiaController::class, 'tambah' ] );
Route::post('/tambah', [TariIndonesiaController::class, 'store' ] );
Route::get('/hapus/{id}', [TariIndonesiaController::class, 'hapus' ] );
Route::get('/edit/{id}', [TariIndonesiaController::class, 'edit' ] );
Route::post('/edit/{id}', [TariIndonesiaController::class, 'update' ] );
Route::get('/lihat/{id}', [TariIndonesiaController::class, 'lihat' ] );