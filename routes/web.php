<?php

use App\Http\Controllers\Counter;
use App\Models\posts;
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
    // $a = Posts::find(1);
    // $a->title = 'b';
    // $a->save();
    
    return view('welcome');
});
