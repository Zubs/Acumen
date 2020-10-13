<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cities;

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
	$city = Cities::find(1)->first();

    return view('welcome')->with('city', $city);
});
