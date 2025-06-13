<?php

use App\Http\Controllers\{LetterController, LoginController, SeriesController, WelcomeController, WaterController};
use App\Livewire\Finances\Create as FinancesCreate;
use App\Livewire\Finances\View as FinancesCategory;
use App\Livewire\Water\Heshe as WaterHeshe;
use App\Livewire\Water\Me as WaterMe;
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
Route::get('/', [WelcomeController::class, 'home'])->name('welcome');
