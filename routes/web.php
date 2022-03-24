<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/menu', [MainController::class, 'menu'])->name('menu');
Route::get('/reservation', [MainController::class, 'reservation'])->name('reservation');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');


// back office

Route::get('/admin', [MainController::class, 'index_admin'])->name('admin.index_admin');
Route::get('/admin/reservation', [ReservationController::class, 'reservation'])->name('admin.reservation.reservation');
Route::get('/admin/reservation/create', [ReservationController::class, 'create'])->name('admin.reservation.create');
Route::post('/admin/reservation', [ReservationController::class, 'store'])->name('admin.reservation.store');
Route::get('/admin/reservation/{id}/edit', [ReservationController::class, 'edit'])->name('admin.reservation.edit');
Route::put('/admin/reservation/{id}', [ReservationController::class, 'update'])->name('admin.reservation.update');
Route::delete('/admin/reservation/{id}', [ReservationController::class, 'destroy'])->name('admin.reservation.destroy');


Route::get('/admin/menu', [MenuController::class, 'menu'])->name('admin.menu.menu');