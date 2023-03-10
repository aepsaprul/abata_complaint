<?php

use App\Http\Controllers\ComplaintController;
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


Route::get('/', [ComplaintController::class, 'index'])->name('complaint');
Route::get('complaint', [ComplaintController::class, 'index'])->name('complaint');
Route::post('complaint/store', [ComplaintController::class, 'store'])->name('complaint.store');
Route::get('complaint/{id}/show', [ComplaintController::class, 'show'])->name('complaint.show');
