<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;

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
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/redirect', function () {
//         return view('welcome');
//     })->name('login');
// });
Route::controller(authController::class)->group(function () {

    Route::get('/redirect', 'LoginFunction');
    Route::get('/login', 'ViewLogin')->name('login');
    Route::get('/register', 'ViewRegister')->name('register');
    Route::get('/logoutt', 'logoutPageLoader')->name('logoutt');
    // Route::get('/accept/{id}','acceptUserAccount')->name('acceptUser')->middleware('isAdmin');
    // Route::get('/reject/{id}','rejecttUserAccount')->name('rejecttUser')->middleware('isAdmin');

});

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::controller(adminController::class)->group(function () {
        
        Route::get('/accept/{id}', 'acceptUserAccount')->name('acceptUser');
        Route::get('/reject/{id}', 'rejecttUserAccount')->name('rejecttUser');
    });
});
