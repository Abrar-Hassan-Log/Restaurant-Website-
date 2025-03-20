<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;

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


Route::get("/",[HomeController::class,"index"]);
Route::get("/users",[userController::class,"user"]);
Route::get("/user/{id}",[userController::class,"deleteUser"]);
Route::get("/redirect",[HomeController::class,"redirect"]);
Route::get("/food", [userController::class, "createFood"])->name('food');
Route::post("/foodUpload",[userController::class,"upload"]);
Route::get("/destroyfood/{id}",[userController::class,"deleteFood"]);
Route::get("/updateView/{id}",[userController::class,'viewupdate']);
Route::post('/editfood/{id}',[userController::class,'updatefood']);
Route::get('/chefview',[userController::class,'viewChef'])->name('viewChef');
Route::post('/chefsUpload', [userController::class,'storechef']);
Route::get('/updateChefs/{id}',[userController::class,'updateChefView'])->name('updateChefView');
Route::post('/updateChefsdata/{id}',[userController::class,'updateChefsData']);
Route::get('/deletechefs/{id}',[userController::class,'destroyChef']);

Route::post('/addtoCart/{id}',[HomeController::class,'addToCart']);
Route::get('/cartshow/{id}', [HomeController::class, 'showCart']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
