<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\categoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardAdmin', function () {
    return view('admin/adminDashboard');
})->middleware(['auth', 'verified'])->name('dashboardAdmin');

Route::get('/admin/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/tickets', [ticketController::class, 'showTickets'])->name('admin.tickets')->middleware(['auth', 'verified']);
Route::get('/admin/category', [categoryController::class, 'showCategory'])->name('admin.category')->middleware(['auth', 'verified']);
Route::post('/admin/category/createcategory', [categoryController::class, 'addCategory'])->middleware('auth', 'verified');
Route::delete('/admin/category/{id}', [categoryController::class, 'deleteCategory'])->middleware('auth', 'verified');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
