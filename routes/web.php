<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'login'])->name('login');

Route::get('/logout',[HomeController::class, 'logout']);
Route::post('/loginval',[HomeController::class, 'loginval'])->name('loginval');
Route::get('/adminDashboard',[HomeController::class, 'adminDashboard']);
Route::get('/adminDashboard/profit',[HomeController::class, 'profit']);
Route::get('/adminDashboard/product',[HomeController::class, 'product']);
Route::post('/productadd',[HomeController::class, 'productadd'])->name('productadd');
Route::post('/customeradd',[HomeController::class, 'customeradd'])->name('customeradd');
Route::get('/adminDashboard/customer',[HomeController::class, 'customer'])->name('customer');
Route::get('/adminDashboard/sell',[HomeController::class, 'sell'])->name('sell');
Route::get('/casher/{id}',[HomeController::class, 'casher'])->name('casher')->middleware('condition');
Route::post('/sellproduct',[HomeController::class, 'sellproduct'])->name('sellproduct');  
Route::get('/adminDashboard/selll',[HomeController::class, 'selll'])->name('selll');
Route::post('/sellproducttest',[HomeController::class, 'sellproducttest'])->name('sellproducttest');  
Route::post('/buyproducttest',[HomeController::class, 'buyproducttest'])->name('buyproducttest'); 
Route::get('/adminDashboard/wasl/{id}',[HomeController::class, 'wasl'])->name('wasl');
Route::get('/productinfo',[HomeController::class, 'productinfo']);
Route::get('/company',[HomeController::class, 'company']);
Route::post('/companyadd',[HomeController::class, 'companyadd'])->name('companyadd'); 
Route::post('/addproductinfo',[HomeController::class, 'addproductinfo'])->name('addproductinfo'); 
Route::get('/delete/{id}',[HomeController::class, 'delete']);
Route::post('/addtype',[HomeController::class, 'addtype'])->name('addtype'); 
Route::get('/update/{id}',[HomeController::class, 'update'])->name('update'); 
Route::post('/up',[HomeController::class, 'up'])->name('up'); 
Route::get('/adminDashboard/cashier',[HomeController::class, 'cashier'])->name('cashier'); 
Route::post('/cashieradd',[HomeController::class, 'cashieradd'])->name('cashieradd'); 
Route::get('/adminDashboard/table',[HomeController::class, 'table'])->name('table');
Route::get('/updatecasher/{id}',[HomeController::class, 'updatecasher'])->name('updatecasher');
Route::post('/upcash',[HomeController::class, 'upcash'])->name('upcash'); 
Route::post('/comup',[HomeController::class, 'comup'])->name('comup');
Route::get('/comupp/{id}',[HomeController::class, 'comupp'])->name('comupp');
Route::post('sell',[HomeController::class, 'sell_bar'])->name('sell_bar');