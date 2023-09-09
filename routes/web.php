<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Categories;
use App\Models\Products;
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

Route::group(['prefix' => '/login'], function(){
    Route::get('/', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/', [AuthController::class, 'attemptLogin'])->name('login.attempt');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/landing', [AuthController::class, 'landing'])->name('landing');

Route::get('/menuUser', [AuthController::class, 'menuUser'])->name('menuUser');

Route::get('/menu', [AuthController::class, 'menu'])->name('menu');

Route::group(['prefix' => '/register'], function(){
    Route::get('/', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/', [AuthController::class, 'storeAccount'])->name('register.store');
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

    /* $category = Categories::create(['name' => 'Café']);
    $product = Products::create([
        'category_id' => $category->id,
        'name' => 'Espresso',
        'price' => 1800,
        'description' => 'Café mezcla seleccionada de Arábica y Robusta',
        'image_path' => 'espresso.jpg',
   ]);

   $category = Categories::create(['name' => 'Pasteleria']);
   $product = Products::create([
        'category_id' => $category->id,
        'name' => 'Torta Reina Madre Lucuma',
        'price' => 31500,
        'description' => 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.',
        'image_path' => 'amapola.jpg',
    ]);

    $category = Categories::create(['name' => 'Sandwich']);
    $product = Products::create([
        'category_id' => $category->id,
        'name' => 'Jamón Pierna',
        'price' => 6800,
        'description' => 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).',
        'image_path' => 'jamon.jpg',
     ]); */

    ////// descomentar lo de arriba para ingresar los datos

Route::get('/', function () {
    return view('welcome');
});
