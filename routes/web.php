<?php

use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/custom-page', [App\Http\Controllers\CustomPageController::class, 'index'])->name('custom.page');
//ruta para PDF

Route::get('/admin/pdfs', [App\Http\Controllers\PdfController::class,'index'])->name('admin.pdfs.index')->middleware('auth');
Route::get('/admin/pdfs/create', [App\Http\Controllers\PdfController::class,'create'])->name('admin.pdfs.create')->middleware('auth');
Route::post('/admin/pdfs/create', [App\Http\Controllers\PdfController::class, 'store'])->name('admin.pdfs.store')->middleware('auth');
Route::get('/admin/pdfs/{id}', [App\Http\Controllers\PdfController::class, 'show'])->name('admin.pdfs.show')->middleware('auth');
Route::get('/admin/pdfs/{id}/edit', [App\Http\Controllers\PdfController::class, 'edit'])->name('admin.pdfs.edit')->middleware('auth');
Route::put('/admin/pdfs/{id}', [App\Http\Controllers\PdfController::class, 'update'])->name('admin.pdfs.update')->middleware('auth');
Route::delete('/admin/pdfs/{id}', [App\Http\Controllers\PdfController::class, 'destroy'])->name('admin.pdfs.destroy')->middleware('auth');

//ruta para Renovaciones

Route::get('/admin/renovaciones', [App\Http\Controllers\RenovacioController::class,'index'])->name('admin.renovaciones.index')->middleware('auth');
Route::get('/admin/renovaciones/create', [App\Http\Controllers\RenovacioController::class,'create'])->name('admin.renovaciones.create')->middleware('auth');
Route::post('/admin/renovaciones/create', [App\Http\Controllers\RenovacioController::class, 'store'])->name('admin.renovaciones.store')->middleware('auth');
Route::get('/admin/renovaciones/{id}', [App\Http\Controllers\RenovacioController::class, 'show'])->name('admin.renovaciones.show')->middleware('auth');
Route::get('/admin/renovaciones/{id}/edit', [App\Http\Controllers\RenovacioController::class, 'edit'])->name('admin.renovaciones.edit')->middleware('auth');
Route::put('/admin/renovaciones/{id}', [App\Http\Controllers\RenovacioController::class, 'update'])->name('admin.renovaciones.update')->middleware('auth');
Route::delete('/admin/renovaciones/{id}', [App\Http\Controllers\RenovacioController::class, 'destroy'])->name('admin.renovaciones.destroy')->middleware('auth');


