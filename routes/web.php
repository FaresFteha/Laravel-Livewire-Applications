<?php

use App\Http\Livewire\Calculator;
use App\Http\Livewire\CascadingDropdown;
use App\Http\Livewire\Counter;
use App\Http\Livewire\ImageUploade;
use App\Http\Livewire\ProductSearch;
use App\Http\Livewire\RegisterForm;
use App\Http\Livewire\TodoList;
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
    return view('welcome');
});

Route::get('/Calculator', Calculator::class)->name('Calculator');
Route::get('/Counter', Counter::class)->name('Counter');
Route::get('/TodoList', TodoList::class)->name('TodoList');
Route::get('/cascading-dropdown', CascadingDropdown::class)->name('cascading-dropdown');
Route::get('/Products-Search', ProductSearch::class)->name('Products-Search');
Route::get('/image-upload', ImageUploade::class)->name('image-upload');
Route::get('/register-form', RegisterForm::class)->name('register-form');
