<?php

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

Route::post('/login', [ApiUserController::class, 'check'])->name('login.check');
Route::middleware('auth')->get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::post('/register', [ApiUserController::class, 'saveRegister'])->name('save.register');
Route::post('/edit_register', [ApiUserController::class, 'editRegister'])->name('edit.register');
Route::get('/logout', [ApiUserController::class, 'logout'])->name('user.logout');
Route::get('/actualizar-datos', [ApiUserController::class, 'updateLogin'])->name('update.login');
Route::middleware('auth')->post('/save_product', [ProductosController::class, 'store'])->name('save.product');
Route::middleware('auth')->post('/delete_product', [ProductosController::class, 'destroy'])->name('delete.product');
Route::middleware('auth')->post('/productos_item', [ProductosController::class, 'show'])->name('edit.product');
Route::middleware('auth')->post('/productos_edit', [ProductosController::class, 'update'])->name('saveEdit.product');
