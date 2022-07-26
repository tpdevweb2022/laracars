<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, "home"])->name("home");
Route::get('/about', [PagesController::class, "about"])->name("about");
Route::get('/contact', [PagesController::class, "contact"])->name("contact-us");


Route::get("/cars", [CarController::class, "index"])->name("cars.index");
Route::get("/cars/create", [CarController::class, "create"])->name("cars.create");

Route::post("/cars", [CarController::class, "store"])->name("cars.store");

Route::get("/cars/{car}/edit", [CarController::class, "edit"])->name("cars.edit");
Route::get("/cars/{car}", [CarController::class, "show"])->name("cars.show");
// Route::resource("cars", CarController::class);
