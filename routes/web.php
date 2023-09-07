<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/superadmin',
        [SuperAdminController::class, 'index'])->name('superadmin.dashboard');

    // laboratories
    Route::get('/superadmin/laboratories',
        [SuperAdminController::class, 'showLaboratories'])->name('superadmin.laboratories');

    // admin lab
    Route::get('/superadmin/admin-lab',
        [SuperAdminController::class, 'showAdminLab'])->name('superadmin.adminlab');

    // students
    Route::get('/superadmin/students',
        [SuperAdminController::class, 'showStudent'])->name('superadmin.students');

    Route::get('/superadmin/students/add',
        [SuperAdminController::class, 'addStudent'])->name('superadmin.students_add');
});

Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

    Route::get('/forgot-password', function() {
        return view('auth.forgot_passwd');
    })->name('forgot_passwd');


});


Route::post('/logout', function() {
    Auth::logout();

    return redirect('/login');
})->name('logout');
