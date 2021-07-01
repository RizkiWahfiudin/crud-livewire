<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::livewire('/', 'book.index')->name('book.index');
Route::livewire('/create', 'book.create')->name('book.create');
Route::livewire('/edit/{id}', 'book.edit')->name('book.edit');