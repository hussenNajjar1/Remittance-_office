<?php

use App\Http\Controllers\Lang;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\users;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\ExchangeRateController;
use App\Http\Controllers\OfficeController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/switch-language/{language}', [Lang::class, 'switchLanguage'])->name('switch.language');

Route::middleware(['auth', 'admin'])->group(function () {
    // من اجل اضافة مكتاب وتعديل وحذف
    Route::get('/offices', [OfficeController::class, 'index']);
    Route::get('/offices/create', [OfficeController::class, 'create']);
    Route::post('/offices', [OfficeController::class, 'store']);
    Route::get('/offices/{office}/edit', [OfficeController::class, 'edit']);
    Route::put('/offices/{office}', [OfficeController::class, 'update']);
    Route::get('/offices/{office}', [OfficeController::class, 'show']);
    Route::delete('/offices/{office}', [OfficeController::class, 'destroy']);
    // صرف العملات

    Route::get('/exchange-rates', [ExchangeRateController::class, 'index']);
    Route::get('/show22', [ExchangeRateController::class, 'show']);
    Route::get('/exchange-rates/create', [ExchangeRateController::class, 'create']);
    Route::post('/exchange-rates', [ExchangeRateController::class, 'store']);
    Route::get('/exchange-rates/{exchangeRate}/edit', [ExchangeRateController::class, 'edit']);
    Route::put('/exchange-rates/{exchangeRate}', [ExchangeRateController::class, 'update']);
    Route::delete('/exchange-rates/{exchangeRate}', [ExchangeRateController::class, 'destroy']);
    Route::get('/show', [ExchangeRateController::class, 'getFluctuations']);
    //  الحوالات
    Route::get('/transfers/create', [TransferController::class, 'createTransferForm']);
    Route::post('/transfers/create', [TransferController::class, 'createTransfer']);
    Route::get('/transfers/history', [TransferController::class, 'viewTransfers']);



// جديد تحويلات
    Route::get('/transfers/history', [TransferController::class, 'viewTransfers']);
    Route::get('/transfers/office/{officeId}', [TransferController::class, 'viewOfficeTransfers']);
// Users  URL
//----------------------
    Route::get('/users', [users::class, 'index']);
    Route::get('/delete/{id}', [users::class, 'destroy']);
//----------------------------

    });
    Route::get('/home', function () {
        $usersWithoutOffice = User::whereNotIn('id', function ($query) {
            $query->select('id_user')->from('offices');
        })->where('role', '!=', 1)->get();

        return view('layouts.Home',compact('usersWithoutOffice'));
    });

    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//---------------------
    Route::get('Individualoffice{id}', [OfficeController::class, 'individualofficeShow']);
    Route::get('individualTransfersSender{id}', [OfficeController::class, 'individualTransfersSender']);
    Route::get('individualTransfersReceiver{id}', [OfficeController::class, 'individualTransfersReceiver']);
});

require __DIR__.'/auth.php';