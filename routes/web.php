<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\P2PController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/p2p', [P2PController::class, 'index']);

Route::get('/p2p/buy', [P2PController::class, 'buy']);

Route::get('/p2p/sell', [P2PController::class, 'sell']);

Route::get('/p2p/makepayment', [P2PController::class, 'makepayment']);

Route::get('/p2p/notifypayment', [P2PController::class, 'notifypayment']);

Route::get('/p2p/confirmpayment', [P2PController::class, 'confirmpayment']);

Route::get('/p2p/rateseller', [P2PController::class, 'rateseller']);
