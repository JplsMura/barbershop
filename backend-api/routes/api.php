<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BarberController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return ['pong' => true];
});

# AUTH
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);
Route::post('/auth/refresh', [AuthController::class, 'refresh']);
Route::post('/user', [AuthController::class, 'create']);

# USUARIO
Route::get('/user', [UserController::class, 'read']);
Route::put('/user', [UserController::class, 'update']);
Route::get('/user/favorites', [UserController::class, 'getFavorites']);
Route::get('/user/favorite', [UserController::class, 'addFavorites']);
Route::get('/user/appointments', [UserController::class, 'getAppointments']);

# BARBER
Route::get('/barbers', [BarberController::class, 'list']);
Route::get('/barber/{id}', [BarberController::class, 'one']);
Route::post('/barber/{id}/appointment', [BarberController::class, 'setAppointment']);

# SEARCH
Route::get('/search', [BarberController::class, 'search']);