<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

/* // Rota para administrador
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('auth.dashboard');
});

// Rota para usuario
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('auth.userDashboard');
}); */


Route::get('home','HomeController@index')->name('home');

require __DIR__.'/auth.php';

Route::get('/produtos', function () {
    return view('productsViews.listAllProducts');
})->middleware('auth')->name('produtos');

Route::get('/categorias', function () {
    return view('categoriesViews.listAllCatagories');
})->middleware('auth')->name('categorias');

Route::get('/marcas', function () {
    return view('brandsViews.listAllBrands');
})->middleware('auth')->name('marcas');

Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/destroy/{user}', [UserController::class, 'destroy'])->name('usuarios.destroy');

Route::get('/marcas', function () {
    return view('auth.register');
})->middleware('auth')->name('registro.create');
