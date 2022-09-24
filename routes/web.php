<?php

use App\Models\Commodity;
use App\Events\SellOrderEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CommodityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WareHouseController;

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

Route::get('/', [WelcomeController::class,'welcome'])->name('welcome');


Route::get('/about', function () {
    return view('about', ['commodities' => Commodity::all()]);
})->name('about');
Route::get('/portfolio/orders', [OrderController::class, 'create'])->name('test');
Auth::routes(['verify' => true]);

// Route::get('/broadcast', function () {
//     broadcast(new SellOrderEvent());
// });

/* Route Dashboards */
Route::group(['prefix' => 'app', 'as' => 'app.', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('updates', UpdateController::class);
    Route::resource('market', MarketController::class);
    Route::resource('commodities', CommodityController::class);
    Route::resource('warehouses', WareHouseController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('banks', BankController::class)->except('index');
    Route::get('profile/{id}', [PortfolioController::class, 'profile'])->name('profile');
    Route::get('/porfolio/orders', [PortfolioController::class, 'orders'])->name('porfolio.orders');
    Route::get('/porfolio/securities', [PortfolioController::class, 'securities'])->name('porfolio.securities');
    Route::resource('orders', OrderController::class);
    Route::get('orders/approve/{id}', [OrderController::class, 'approve'])->name('orders.approve');
    Route::resource('settings', SettingController::class);
});



