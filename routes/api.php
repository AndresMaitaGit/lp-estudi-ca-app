<?php

use App\Http\Controllers\ApiProductosController;
use App\Http\Controllers\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::post('/login', [ApiUserController::class, 'check']);
Route::post('/register', [ApiUserController::class, 'saveRegister']);
Route::post('/edit_register', [ApiUserController::class, 'editRegister']);
Route::get('/actualizar-datos', [ApiUserController::class, 'updateLogin']);
Route::middleware('auth:api')->get('/logout', [ApiUserController::class, 'logout']);
Route::middleware('auth:api')->get('/productos', [ApiProductosController::class, 'index']);
Route::middleware('auth:api')->post('/save_product', [ApiProductosController::class, 'store'])->name('save.product');
Route::middleware('auth:api')->post('/delete_product', [ApiProductosController::class, 'destroy'])->name('delete.product');
Route::middleware('auth:api')->post('/productos_item', [ApiProductosController::class, 'show'])->name('edit.product');
Route::middleware('auth:api')->post('/productos_edit', [ApiProductosController::class, 'update'])->name('saveEdit.product');
