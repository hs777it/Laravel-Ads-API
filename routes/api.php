<?php

use App\Http\Controllers\Api\AdController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\DomainController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\DistrictController;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Round;

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


## ------------------------------------------------ AUTH MODULE
Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->middleware('auth:sanctum');
});

## ------------------------------------------------ SETTINGS MODULE
Route::get('/settings', SettingController::class);

## ------------------------------------------------ CITIES MODULE
Route::get('/cities', CityController::class);

## ------------------------------------------------ DISTRICTS MODULE
// Route::get('/districts/{city_id}', DistrictController::class); //Parameter
Route::get('/districts', DistrictController::class); //Query Parameter

## ------------------------------------------------ MESSAGES MODULE
Route::post('/message', MessageController::class);

## ------------------------------------------------ DOMAINS(Categories) MODULE
Route::get('/domains', DomainController::class);

## ------------------------------------------------ ADS MODULE
Route::prefix('ads')->controller(AdController::class)->group(function () {

    // basic
    Route::get('/', 'index');
    Route::get('/latest', 'latest');
    Route::get('/domain/{domain_id}', 'domain');
    Route::get('/search', 'search');

    // User API ads endpoint
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('create', 'create');
        Route::post('update/{adId}', 'update');
        Route::get('delete/{adId}', 'delete');
        Route::get('myads', 'myads');
    });
});
