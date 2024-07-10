<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QueueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', [AuthController::class, 'getRegistrationView']);
Route::get('/login', [AuthController::class, 'getLoginView']);

Route::post('/save_user', [AuthController::class, 'saveUser']);
Route::post('/login_user', [AuthController::class, 'loginUser']);

Route::post('/get_queue_details', [QueueController::class, 'getQueueDetailsView']);
Route::post('/queue_view', [QueueController::class, 'getQueueView']);

Route::post('/leave_queue', [QueueController::class, 'leaveQueue']);









