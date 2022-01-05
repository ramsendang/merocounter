<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BusrouteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [WelcomeController::class, 'index']);


Route::get('/vendorlogin', [VendorController::class, 'index'] );
Route::post('/vendorlogin', [VendorController::class, 'login'] );
Route::get('/vendorRegister', [VendorController::class, 'register'] );
Route::post('/vendorRegister', [VendorController::class, 'registerSave'] );
Route::post('/logoutVendor', [VendorController::class, 'logout'] );

Route::get('/dashbord', function(){
    return view('dashbord');
});

Route::get('/bus', [BusController::class, 'index']);
Route::get('/registerBus',[BusController::class, 'create']);
Route::post('/registerBus', [BusController::class, 'store']);
Route::post('/searchbus', [BusController::class, 'search']);
Route::get('/assingroute/{bus}', [BusController::class, 'assignRoute']);
Route::post('/addroute/{bus}', [BusController::class, 'storeRoute']);
Route::get('/allbus', [BusController::class, 'show']);

Route::get('/busroutes', [RouteController::class, 'index']);
Route::get('/addroute', [RouteController::class, 'create']);
Route::post('/addroute', [RouteController::class, 'store']);
Route::get('/editroute/{route}', [RouteController::class, 'edit']);
Route::post('/editroute/{route}', [RouteController::class, 'update']);
Route::post('/deleteroute/{route}', [RouteController::class, 'destroy']);


Route::get('/login',[UserController::class, 'index'] );
Route::post('/login',[UserController::class, 'login'] );
Route::get('/register', [UserController::class, 'getregisterpage']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/availablebus/book/{bus}', [BookingController::class, 'index']);
Route::post('/availablebus/book', [BookingController::class, 'store']);

Route::get('/mybooking', function(){
    $userid = session('loggedUser');
    $userdata=DB::select("select * from users where id =$userid");
    foreach($userdata as $userdatas){
        $emailaddress= $userdatas->email;
    }
    $data = DB::select("select * from bookings where email = '$emailaddress'");
    return view('pages.mybooking',[
        'data'=> $data
    ]);
});

Route::get('/mybooking/pay/{booking}',[PaymentController::class, 'index']);

Route::get('/leaderboard', function(){
    return view('pages.leaderboard');
});


Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');