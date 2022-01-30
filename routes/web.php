<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\HamburgerController;
use App\Http\Controllers\Frontend\HamburgerController as FrontendHamburgerController;
use App\Http\Controllers\Frontend\PizzaController as FrontendPizzaController;
use App\Http\Controllers\Frontend\DrinkController as FrontendDrinkController;
use App\Http\Controllers\Frontend\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/hamburgers', [FrontendHamburgerController::class, 'index'])->name('hamburgers.index');
Route::get('/hamburgers/{hamburger:id}', [FrontendHamburgerController::class, 'show'])->name('hamburgers.show');
Route::get('/pizzas', [FrontendPizzaController::class, 'index'])->name('pizzas.index');
Route::get('/pizzas/{pizza:id}', [FrontendPizzaController::class, 'show'])->name('pizzas.show');
Route::get('/drinks', [FrontendDrinkController::class, 'index'])->name('drinks.index');
Route::get('/drinks/{drink:id}', [FrontendDrinkController::class, 'show'])->name('drinks.show');


Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', function() {
        return Inertia::render('Admin/Index');
    })->name('index');
    Route::resource('hamburgers', HamburgerController::class);
    Route::resource('pizzas', PizzaController::class);
    Route::resource('drinks', DrinkController::class);
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
