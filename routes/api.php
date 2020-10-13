<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\ForecastsController;
use App\Http\Controllers\TemperaturesController;
use App\Http\Controllers\WebhooksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
	'prefix' => '/cities',
], function () {

	// Creating a city
	Route::post('/', [CitiesController::class, 'store']);

	// Updating a city
	Route::patch('/{id}', [CitiesController::class, 'update']);

	// Deleting a city
	Route::delete('/{id}', [CitiesController::class, 'destroy']);
});

// Register a new temperature for a city
Route::post('/temperature', [TemperaturesController::class, 'store']);

// Get the forecasts for a city
Route::get('/forecasts/{id}', [ForecastsController::class, 'show']);
