<?php

use App\Http\Controllers\Counter;
use App\Http\Livewire\Counter as LivewireCounter;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\LinesOfCode\Counter as LinesOfCodeCounter;

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

Route::any('/', function (LivewireCounter $count) {
    return view('welcome', ['count' => $count->count]);
});
