<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Dash2Controller;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PublicacionesController;

Auth::routes();
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/proyectos', [LandingPageController::class, 'proyectos'])->name('landing.proyectos');
Route::get('/blogs', [LandingPageController::class, 'blogs'])->name('landing.blogs');
Route::get('/galeria', [LandingPageController::class, 'galeria'])->name('landing.galeria');
Route::get('/acerca', [LandingPageController::class, 'acerca'])->name('landing.acerca');
Route::get('/quienes-somos', [LandingPageController::class, 'quienesSomos'])->name('landing.quienes.somos');
Route::get('/premios', [LandingPageController::class, 'premios'])->name('landing.premios');
Route::get('/donaciones', [LandingPageController::class, 'donaciones'])->name('landing.donaciones');

Route::get('/dash2', [Dash2Controller::class, 'index'])->name('dash2')->middleware('auth');


Route::get('admin/personas', [PersonasController::class, 'index'])->name('admin.personas');
Route::get('admin/personas/crear', [PersonasController::class, 'crear'])->name('admin.personas.crear');
Route::get('admin/personas/show/{id}', [PersonasController::class, 'show'])->name('admin.personas.detalles');
Route::get('admin/personas/actualizar/{id}', [PersonasController::class, 'actualizar'])->name('admin.personas.actualizar');
Route::put('admin/personas/update/{id}', [PersonasController::class, 'update'])->name('admin.personas.update');
Route::put('admin/personas/eliminar/{id}', [PersonasController::class, 'eliminar'])->name('admin.personas.eliminar');
Route::put('admin/personas/store', [PersonasController::class, 'store'])->name('admin.personas.store');


Route::get('admin/tipo_publicacion', [TiposController::class, 'index'])->name('admin.tipo_publicacion');
Route::get('admin/tipo_publicacion/crear', [TiposController::class, 'crear'])->name('admin.tipo_publicacion.crear');
Route::get('admin/tipo_publicacion/show/{id}', [TiposController::class, 'show'])->name('admin.tipo_publicacion.detalles');
Route::get('admin/tipo_publicacion/actualizar/{id}', [TiposController::class, 'actualizar'])->name('admin.tipo_publicacion.actualizar');
Route::put('admin/tipo_publicacion/update/{id}', [TiposController::class, 'update'])->name('admin.tipo_publicacion.update');
Route::put('admin/tipo_publicacion/eliminar/{id}', [TiposController::class, 'eliminar'])->name('admin.tipo_publicacion.eliminar');
Route::put('admin/tipo_publicacion/store', [TiposController::class, 'store'])->name('admin.tipo_publicacion.store');

Route::get('admin/publicaciones', [PublicacionesController::class, 'index'])->name('admin.publicaciones');
Route::get('admin/publicaciones/crear', [PublicacionesController::class, 'crear'])->name('admin.publicaciones.crear');
Route::get('admin/publicaciones/show/{id}', [PublicacionesController::class, 'show'])->name('admin.publicaciones.detalles');
Route::get('admin/publicaciones/actualizar/{id}', [PublicacionesController::class, 'actualizar'])->name('admin.publicaciones.actualizar');
Route::put('admin/publicaciones/update/{id}', [PublicacionesController::class, 'update'])->name('admin.publicaciones.update');
Route::put('admin/publicaciones/eliminar/{id}', [PublicacionesController::class, 'eliminar'])->name('admin.publicaciones.eliminar');
Route::put('admin/publicaciones/store', [PublicacionesController::class, 'store'])->name('admin.publicaciones.store');


Route::get('admin/productos', [ProductosController::class, 'index'])->name('admin.productos');
Route::get('admin/productos/crear', [ProductosController::class, 'crear'])->name('admin.productos.crear');
Route::get('admin/productos/show/{id}', [ProductosController::class, 'show'])->name('admin.productos.detalles');
Route::get('admin/productos/actualizar/{id}', [ProductosController::class, 'actualizar'])->name('admin.productos.actualizar');
Route::put('admin/productos/update/{id}', [ProductosController::class, 'update'])->name('admin.productos.update');
Route::put('admin/productos/eliminar/{id}', [ProductosController::class, 'eliminar'])->name('admin.productos.eliminar');
Route::put('admin/productos/store', [ProductosController::class, 'store'])->name('admin.productos.store');


Route::get('/producto/{id}/vista', [ProductosController::class, 'showProducto'])->name('producto.vista');
Route::get('/publicacion/{id}/vista', [ProductosController::class, 'showPublicacion'])->name('publicacion.vista');

Route::get('/page', function () {
    return view('page.page');
});
