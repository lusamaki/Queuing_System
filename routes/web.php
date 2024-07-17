<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\ReportController;
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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
 Route::get('/admin', [AdminController::class, 'index']);
 Route::get('/manager', [ManagerController::class, 'index']);
 Route::post('/reports', [ReportController::class, 'viewReports'])->name('reports');
 Route::get('/receptionist', [ReceptionistController::class, 'index'])->name('receptionist.dashboard');









