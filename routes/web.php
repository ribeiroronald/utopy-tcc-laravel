<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

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

/**
 * ROUTE HOME
 */
Route::get(
    '/', 
    [HomeController::class, 'index']  
)->name('home');


/**
 * AUTENTICAÇÃO
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    /**
     * ROUTE DASHBOARD 
     */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    /**
    * ROUTE CATALOGO 
    */
    Route::get(
        '/catalogo', 
        [HomeController::class, 'index']  
    )->name('app.catalogo');
    Route::get(
        '/catalogo/{:gameID}', 
        [CatalogController::class, 'show']  
    )->name('app.catalogo.jogo');
    
    
    /** 
    * ROUTE ILHAS
    */
    Route::get(
        '/ilhas', 
        [HomeController::class, 'index']  
    )->name('app.ilhas');
    Route::get(
        '/ilhas/{:name}', 
        [HomeController::class, 'index']  
    )->name('app.ilha');
    
    
    /** 
    * ROUTE DESTAQUES
    */
    Route::get(
        '/destaques', 
        [HomeController::class, 'index']  
    )->name('app.destaques');
    Route::get(
        '/destaques/{:id}', 
        [HomeController::class, 'index']  
    )->name('app.destaque');
    
    
    /**
    * ROUTES DOAÇÕES
    */
    Route::get(
        '/donations', 
        [HomeController::class, 'index']  
    )->name('app.donations');
    Route::get(
        '/donations/{:id}', 
        [HomeController::class, 'index']  
    )->name('app.donation');


    /**
    * ROUTES NOTICIAIS
    */
    Route::get(
        '/news', 
        [HomeController::class, 'index']  
    )->name('app.news');

    Route::get(
        '/news/{:id}', 
        [HomeController::class, 'index']  
    )->name('app.new');
});


