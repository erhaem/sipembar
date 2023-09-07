<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\InventoryController;

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

Route::post('/login', [AuthController::class, 'authenticate']);

Route::middleware(['auth:api', 'role:admin_lab'])->group(function () {
    Route::get('/inventories', [InventoryController::class, 'index']);
    Route::get('/inventories/{id}', [InventoryController::class, 'getById']);
    Route::post('/inventories/create', [InventoryController::class, 'create']);
    Route::put('/inventories/update/{id}', [InventoryController::class, 'update']);
    Route::delete('/inventories/delete/{id}', [InventoryController::class, 'delete']);
});
