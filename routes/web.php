<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//ここからは店舗管理者
Route::get('/auth/top', function () {
    return view('auth.top');
});
Route::group(['middleware' => ['auth']], function() {
    Route::get('/register', function () {
        return view('auth.register');
    });
    Route::get('/auth/store', 'App\Http\Controllers\AuthController@store');
    Route::get('/auth/storeEdit', 'App\Http\Controllers\AuthController@storeEdit');
    Route::get('/auth/storeUpdate', 'App\Http\Controllers\AuthController@storeUpdate');
    Route::get('/auth/storeDelete', 'App\Http\Controllers\AuthController@storeDelete');
    Route::get('/auth/reservationStatus', 'App\Http\Controllers\AuthController@reservationStatus');
    Route::get('/auth/reservationStatu', 'App\Http\Controllers\AuthController@reservationStatu');
    Route::get('/auth/loginUser', function () {
        return view('auth.loginUser');
    });
    Route::get('/auth/userEdit', 'App\Http\Controllers\AuthController@userEdit');
    Route::post('/auth/userUpdate', 'App\Http\Controllers\AuthController@userUpdate');
    Route::get('/auth/userDelete', 'App\Http\Controllers\AuthController@userDelete');
    Route::get('/auth/users', 'App\Http\Controllers\AuthController@users');
    Route::get('/auth/user', 'App\Http\Controllers\AuthController@user');
    Route::get('/auth/lineNotificationRegistration', function () {
        return view('auth.lineNotificationRegistration');
    });
    Route::post('/auth/tokenRegistration', 'App\Http\Controllers\AuthController@tokenRegistration');
   
});
//ここからadmin管理者
Route::get('/admin', function () {
    return view('admin/top');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});
Route::post('/admin/login', 'App\Http\Controllers\admin\LoginController@login');
Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/admin/storeRegister', function () {
        return view('admin/storeRegister');
    });
    Route::get('/admin/userRegistrationSuccessful', function () {
        return view('admin.userRegistrationSuccessful');
    });
    Route::post('/admin/storeRegister', 'App\Http\Controllers\adminController@storeRegister');
    Route::post('/admin/logout',  'App\Http\Controllers\admin\LoginController@logout')->name('admin.logout');
    Route::post('/admin/registerByAdmin', 'App\Http\Controllers\admin\registerController@registerByAdmin');
    
    Route::get('/admin/stores', 'App\Http\Controllers\adminController@stores');
    Route::get('/admin/store', 'App\Http\Controllers\adminController@store');
    Route::get('/admin/storeEdit', 'App\Http\Controllers\adminController@storeEdit');
    Route::post('/admin/storeUpdate', 'App\Http\Controllers\adminController@storeUpdate');
    Route::get('/admin/storeUsers', 'App\Http\Controllers\adminController@storeUsers');
    Route::get('/admin/storeReservationStatus', 'App\Http\Controllers\adminController@storeReservationStatus');
    Route::get('/admin/reservationStatus', 'App\Http\Controllers\adminController@reservationStatus');
    Route::get('/admin/reservationStatu', 'App\Http\Controllers\adminController@reservationStatu');
    Route::get('/admin/storeDelete', 'App\Http\Controllers\adminController@storeDelete');
    
    Route::get('/admin/user', 'App\Http\Controllers\adminController@user');
    Route::get('/admin/userEdit', 'App\Http\Controllers\adminController@userEdit');
    Route::post('/admin/userUpdate', 'App\Http\Controllers\adminController@userUpdate');
    Route::get('/admin/userRegister', 'App\Http\Controllers\adminController@userRegister');
    Route::post('/admin/userRegistration', 'App\Http\Controllers\adminController@userRegistration');
    Route::get('/admin/userDelete', 'App\Http\Controllers\adminController@userDelete');
});
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::post('/admin/register', 'App\Http\Controllers\admin\RegisterController@register');
Auth::routes();
//ここからは一般ユーザー
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{store_url}','App\Http\Controllers\MainController@topPage');
Route::get('/{store_url}/bookingDetails','App\Http\Controllers\MainController@bookingDetails');
Route::get('/{store_url}/bookingContents', 'App\Http\Controllers\MainController@bookingContents');
Route::get('/{store_url}/bookingDetails','App\Http\Controllers\MainController@bookingDetails');
Route::get('/{store_url}/contentConfirmation', 'App\Http\Controllers\MainController@contentConfirmation');
Route::get('/{store_url}/reservationCompleted', 'App\Http\Controllers\MainController@reservationCompleted');









