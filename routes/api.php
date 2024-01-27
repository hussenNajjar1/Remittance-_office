<?php

use App\Http\Controllers\OfficeController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfficeApiController;
use App\Http\Controllers\Api\ExchangeRateApiController;
use App\Http\Controllers\Api\TransferApiController ;
use App\Http\Controllers\Api\UserControllerApi ;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Route::middleware('auth:api')->get('/users', [users::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/moneyorderinformation', [TransferController::class, 'indexMoneyOrderInformation']);
Route::post('/showMoneyOrderInformation', [TransferController::class, 'showMoneyOrderInformation']);

Route::middleware(['auth', 'admin'])->group(function () {

//----------------------


//----------------------------

});


// login
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});

// User
     Route::get('/users', [UserControllerApi::class, 'index']);
    Route::delete('/users/{id}', [UserControllerApi::class, 'destroy']);

// offices
    Route::get('/offices', [OfficeApiController::class, 'index']);
    Route::get('/offices/{idUser}', [OfficeApiController::class, 'individualofficeShow']);
    Route::get('/offices/{idUser}/transfers/sender', [OfficeApiController::class, 'individualTransfersSender']);
    Route::get('/offices/{idUser}/transfers/receiver', [OfficeApiController::class, 'individualTransfersReceiver']);
    Route::post('/offices', [OfficeApiController::class, 'store']);
    Route::get('/offices/create', [OfficeApiController::class, 'create']);
    Route::get('/offices/{office}/edit', [OfficeApiController::class, 'edit']);
    Route::put('/offices/{office}', [OfficeApiController::class, 'update']);
    Route::get('/offices/{office}', [OfficeApiController::class, 'show']);
    Route::delete('/offices/{office}', [OfficeApiController::class, 'destroy']);

// Exchange
    Route::get('/exchange-rates', [ExchangeRateApiController::class, 'index']);
    Route::get('/exchange-rates/show', [ExchangeRateApiController::class, 'show']);
    Route::post('/exchange-rates', [ExchangeRateApiController::class, 'store']);
    Route::get('/exchange-rates/{exchangeRate}/edit', [ExchangeRateApiController::class, 'edit']);
    Route::put('/exchange-rates/{exchangeRate}', [ExchangeRateApiController::class, 'update']);
    Route::delete('/exchange-rates/{exchangeRate}', [ExchangeRateApiController::class, 'destroy']);
    Route::get('/exchange-rates/fluctuations', [ExchangeRateApiController::class, 'getFluctuations']);



// Transfers
    Route::post('/transfers', [TransferApiController::class, 'createTransfer']);
    Route::get('/transfers', [TransferApiController::class, 'viewTransfers']);
    Route::get('/transfers/{officeId}', [TransferApiController::class, 'viewOfficeTransfers']);
    Route::get('/transfers/{id}/money-order-information', [TransferApiController::class, 'showMoneyOrderInformation']);
    Route::get('/money-order-information', [TransferApiController::class, 'indexMoneyOrderInformation']);