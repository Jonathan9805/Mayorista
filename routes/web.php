<?php

use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/custom-page', [App\Http\Controllers\CustomPageController::class, 'index'])->name('custom.page');
Route::get('/puestos-page', [App\Http\Controllers\PuestosPageController::class, 'index'])->name('puestos.page');

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

//ruta para locales

Route::get('/admin/locales', [App\Http\Controllers\LocalesController::class,'index'])->name('admin.locales.index')->middleware('auth');
Route::get('/admin/locales/create', [App\Http\Controllers\LocalesController::class,'create'])->name('admin.locales.create')->middleware('auth');
Route::post('/admin/locales/create', [App\Http\Controllers\LocalesController::class, 'store'])->name('admin.locales.store')->middleware('auth');
Route::get('/admin/locales/{id}', [App\Http\Controllers\LocalesController::class, 'show'])->name('admin.locales.show')->middleware('auth');
Route::get('/admin/locales/{id}/edit', [App\Http\Controllers\LocalesController::class, 'edit'])->name('admin.locales.edit')->middleware('auth');
Route::put('/admin/locales/{id}', [App\Http\Controllers\LocalesController::class, 'update'])->name('admin.locales.update')->middleware('auth');
Route::delete('/admin/locales/{id}', [App\Http\Controllers\LocalesController::class, 'destroy'])->name('admin.locales.destroy')->middleware('auth');

//ruta para frutillas

Route::get('/admin/frutillas', [App\Http\Controllers\FrutillasController::class,'index'])->name('admin.frutillas.index')->middleware('auth');
Route::get('/admin/frutillas/create', [App\Http\Controllers\FrutillasController::class,'create'])->name('admin.frutillas.create')->middleware('auth');
Route::post('/admin/frutillas/create', [App\Http\Controllers\FrutillasController::class, 'store'])->name('admin.frutillas.store')->middleware('auth');
Route::get('/admin/frutillas/{id}', [App\Http\Controllers\FrutillasController::class, 'show'])->name('admin.frutillas.show')->middleware('auth');
Route::get('/admin/frutillas/{id}/edit', [App\Http\Controllers\FrutillasController::class, 'edit'])->name('admin.frutillas.edit')->middleware('auth');
Route::put('/admin/frutillas/{id}', [App\Http\Controllers\FrutillasController::class, 'update'])->name('admin.frutillas.update')->middleware('auth');
Route::delete('/admin/frutillas/{id}', [App\Http\Controllers\FrutillasController::class, 'destroy'])->name('admin.frutillas.destroy')->middleware('auth');

//ruta para ajos

Route::get('/admin/ajos', [App\Http\Controllers\AjosController::class,'index'])->name('admin.ajos.index')->middleware('auth');
Route::get('/admin/ajos/create', [App\Http\Controllers\AjosController::class,'create'])->name('admin.ajos.create')->middleware('auth');
Route::post('/admin/ajos/create', [App\Http\Controllers\AjosController::class, 'store'])->name('admin.ajos.store')->middleware('auth');
Route::get('/admin/ajos/{id}', [App\Http\Controllers\AjosController::class, 'show'])->name('admin.ajos.show')->middleware('auth');
Route::get('/admin/ajos/{id}/edit', [App\Http\Controllers\AjosController::class, 'edit'])->name('admin.ajos.edit')->middleware('auth');
Route::put('/admin/ajos/{id}', [App\Http\Controllers\AjosController::class, 'update'])->name('admin.ajos.update')->middleware('auth');
Route::delete('/admin/ajos/{id}', [App\Http\Controllers\AjosController::class, 'destroy'])->name('admin.ajos.destroy')->middleware('auth');

//ruta para adoquines

Route::get('/admin/adoquines', [App\Http\Controllers\AdoquinesController::class,'index'])->name('admin.adoquines.index')->middleware('auth');
Route::get('/admin/adoquines/create', [App\Http\Controllers\AdoquinesController::class,'create'])->name('admin.adoquines.create')->middleware('auth');
Route::post('/admin/adoquines/create', [App\Http\Controllers\AdoquinesController::class, 'store'])->name('admin.adoquines.store')->middleware('auth');
Route::get('/admin/adoquines/{id}', [App\Http\Controllers\AdoquinesController::class, 'show'])->name('admin.adoquines.show')->middleware('auth');
Route::get('/admin/adoquines/{id}/edit', [App\Http\Controllers\AdoquinesController::class, 'edit'])->name('admin.adoquines.edit')->middleware('auth');
Route::put('/admin/adoquines/{id}', [App\Http\Controllers\AdoquinesController::class, 'update'])->name('admin.adoquines.update')->middleware('auth');
Route::delete('/admin/adoquines/{id}', [App\Http\Controllers\AdoquinesController::class, 'destroy'])->name('admin.adoquines.destroy')->middleware('auth');

//ruta para flores

Route::get('/admin/flores', [App\Http\Controllers\FloresController::class,'index'])->name('admin.flores.index')->middleware('auth');
Route::get('/admin/flores/create', [App\Http\Controllers\FloresController::class,'create'])->name('admin.flores.create')->middleware('auth');
Route::post('/admin/flores/create', [App\Http\Controllers\FloresController::class, 'store'])->name('admin.flores.store')->middleware('auth');
Route::get('/admin/flores/{id}', [App\Http\Controllers\FloresController::class, 'show'])->name('admin.flores.show')->middleware('auth');
Route::get('/admin/flores/{id}/edit', [App\Http\Controllers\FloresController::class, 'edit'])->name('admin.flores.edit')->middleware('auth');
Route::put('/admin/flores/{id}', [App\Http\Controllers\FloresController::class, 'update'])->name('admin.flores.update')->middleware('auth');
Route::delete('/admin/flores/{id}', [App\Http\Controllers\FloresController::class, 'destroy'])->name('admin.flores.destroy')->middleware('auth');

//ruta para cangrejos

Route::get('/admin/cangrejos', [App\Http\Controllers\CangrejosController::class,'index'])->name('admin.cangrejos.index')->middleware('auth');
Route::get('/admin/cangrejos/create', [App\Http\Controllers\CangrejosController::class,'create'])->name('admin.cangrejos.create')->middleware('auth');
Route::post('/admin/cangrejos/create', [App\Http\Controllers\CangrejosController::class, 'store'])->name('admin.cangrejos.store')->middleware('auth');
Route::get('/admin/cangrejos/{id}', [App\Http\Controllers\CangrejosController::class, 'show'])->name('admin.cangrejos.show')->middleware('auth');
Route::get('/admin/cangrejos/{id}/edit', [App\Http\Controllers\CangrejosController::class, 'edit'])->name('admin.cangrejos.edit')->middleware('auth');
Route::put('/admin/cangrejos/{id}', [App\Http\Controllers\CangrejosController::class, 'update'])->name('admin.cangrejos.update')->middleware('auth');
Route::delete('/admin/cangrejos/{id}', [App\Http\Controllers\CangrejosController::class, 'destroy'])->name('admin.cangrejos.destroy')->middleware('auth');

//ruta para ropas

Route::get('/admin/ropas', [App\Http\Controllers\RopasController::class,'index'])->name('admin.ropas.index')->middleware('auth');
Route::get('/admin/ropas/create', [App\Http\Controllers\RopasController::class,'create'])->name('admin.ropas.create')->middleware('auth');
Route::post('/admin/ropas/create', [App\Http\Controllers\RopasController::class, 'store'])->name('admin.ropas.store')->middleware('auth');
Route::get('/admin/ropas/{id}', [App\Http\Controllers\RopasController::class, 'show'])->name('admin.ropas.show')->middleware('auth');
Route::get('/admin/ropas/{id}/edit', [App\Http\Controllers\RopasController::class, 'edit'])->name('admin.ropas.edit')->middleware('auth');
Route::put('/admin/ropas/{id}', [App\Http\Controllers\RopasController::class, 'update'])->name('admin.ropas.update')->middleware('auth');
Route::delete('/admin/ropas/{id}', [App\Http\Controllers\RopasController::class, 'destroy'])->name('admin.ropas.destroy')->middleware('auth');

//ruta para ropas tradicionales

Route::get('/admin/tradicionales', [App\Http\Controllers\TradicionalesController::class,'index'])->name('admin.tradicionales.index')->middleware('auth');
Route::get('/admin/tradicionales/create', [App\Http\Controllers\TradicionalesController::class,'create'])->name('admin.tradicionales.create')->middleware('auth');
Route::post('/admin/tradicionales/create', [App\Http\Controllers\TradicionalesController::class, 'store'])->name('admin.tradicionales.store')->middleware('auth');
Route::get('/admin/tradicionales/{id}', [App\Http\Controllers\TradicionalesController::class, 'show'])->name('admin.tradicionales.show')->middleware('auth');
Route::get('/admin/tradicionales/{id}/edit', [App\Http\Controllers\TradicionalesController::class, 'edit'])->name('admin.tradicionales.edit')->middleware('auth');
Route::put('/admin/tradicionales/{id}', [App\Http\Controllers\TradicionalesController::class, 'update'])->name('admin.tradicionales.update')->middleware('auth');
Route::delete('/admin/tradicionales/{id}', [App\Http\Controllers\TradicionalesController::class, 'destroy'])->name('admin.tradicionales.destroy')->middleware('auth');

//ruta para frutas

Route::get('/admin/frutas', [App\Http\Controllers\FrutasController::class,'index'])->name('admin.frutas.index')->middleware('auth');
Route::get('/admin/frutas/create', [App\Http\Controllers\FrutasController::class,'create'])->name('admin.frutas.create')->middleware('auth');
Route::post('/admin/frutas/create', [App\Http\Controllers\FrutasController::class, 'store'])->name('admin.frutas.store')->middleware('auth');
Route::get('/admin/frutas/{id}', [App\Http\Controllers\FrutasController::class, 'show'])->name('admin.frutas.show')->middleware('auth');
Route::get('/admin/frutas/{id}/edit', [App\Http\Controllers\FrutasController::class, 'edit'])->name('admin.frutas.edit')->middleware('auth');
Route::put('/admin/frutas/{id}', [App\Http\Controllers\FrutasController::class, 'update'])->name('admin.frutas.update')->middleware('auth');
Route::delete('/admin/frutas/{id}', [App\Http\Controllers\FrutasController::class, 'destroy'])->name('admin.frutas.destroy')->middleware('auth');

//ruta para abastos

Route::get('/admin/abastos', [App\Http\Controllers\AbastosController::class,'index'])->name('admin.abastos.index')->middleware('auth');
Route::get('/admin/abastos/create', [App\Http\Controllers\AbastosController::class,'create'])->name('admin.abastos.create')->middleware('auth');
Route::post('/admin/abastos/create', [App\Http\Controllers\AbastosController::class, 'store'])->name('admin.abastos.store')->middleware('auth');
Route::get('/admin/abastos/{id}', [App\Http\Controllers\AbastosController::class, 'show'])->name('admin.abastos.show')->middleware('auth');
Route::get('/admin/abastos/{id}/edit', [App\Http\Controllers\AbastosController::class, 'edit'])->name('admin.abastos.edit')->middleware('auth');
Route::put('/admin/abastos/{id}', [App\Http\Controllers\AbastosController::class, 'update'])->name('admin.abastos.update')->middleware('auth');
Route::delete('/admin/abastos/{id}', [App\Http\Controllers\AbastosController::class, 'destroy'])->name('admin.abastos.destroy')->middleware('auth');

//ruta para alimentos

Route::get('/admin/alimentos', [App\Http\Controllers\AlimentosController::class,'index'])->name('admin.alimentos.index')->middleware('auth');
Route::get('/admin/alimentos/create', [App\Http\Controllers\AlimentosController::class,'create'])->name('admin.alimentos.create')->middleware('auth');
Route::post('/admin/alimentos/create', [App\Http\Controllers\AlimentosController::class, 'store'])->name('admin.alimentos.store')->middleware('auth');
Route::get('/admin/alimentos/{id}', [App\Http\Controllers\AlimentosController::class, 'show'])->name('admin.alimentos.show')->middleware('auth');
Route::get('/admin/alimentos/{id}/edit', [App\Http\Controllers\AlimentosController::class, 'edit'])->name('admin.alimentos.edit')->middleware('auth');
Route::put('/admin/alimentos/{id}', [App\Http\Controllers\AlimentosController::class, 'update'])->name('admin.alimentos.update')->middleware('auth');
Route::delete('/admin/alimentos/{id}', [App\Http\Controllers\AlimentosController::class, 'destroy'])->name('admin.alimentos.destroy')->middleware('auth');
