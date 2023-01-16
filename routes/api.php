<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/create_trade', function (){

    \Illuminate\Support\Facades\DB::table('TRD_TRADER_TB')->insert([
        'TRADER_SID' => '471',
        'COMP_NO' => 957463719,
        'TRADER_NAME_AR' => 'شركة مصعب ماجد صلاح',
        'CITY_SID' => 82,
        'TRADER_ADDRESS' => 'بني سهيلا - شارع الروضة',
        'TRADER_TEL_NO' => '0592643113',
        'TRADER_MOBILE_NO' => '0599265453',
        'TRADER_REP_ID' => '957463713',
        'TRADER_REP_NAME' => 'سعيد زهدي صلاح',
        'TRADER_REP_MOBILE_NO' => '0365654544',
        'TRADER_ACTIVE' => 1,
        'TRADER_STATUS' => 3,
        'BENF_SID' => 111223,
    ]);

    dd('mousab');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);
Route::get('categories', [\App\Http\Controllers\Api\CategoryController::class, 'index']);




