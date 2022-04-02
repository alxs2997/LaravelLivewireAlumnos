<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Alumnos;

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

//Route::resource('alumnos',Alumnos::class)->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/alumnos', Alumnos::class);
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

});
