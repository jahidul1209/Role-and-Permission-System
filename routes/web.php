<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('client_entry', \App\Http\Controllers\ClientEntryController::class);
    Route::resource('sold_client', \App\Http\Controllers\SoldClientController::class);
 Route::resource('createusers', \App\Http\Controllers\UserTableController::class);
  Route::resource('area', \App\Http\Controllers\AreaController::class);
   Route::resource('software', \App\Http\Controllers\SoftwareController::class);
      Route::resource('teams', \App\Http\Controllers\TeamController::class);
});

Route::group(['prefix' => 'admin'], function () {
 
Route::get('/', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('admin.dashboard');
  Route::resource('roles', \App\Http\Controllers\RolesController::class);
  Route::resource('users', \App\Http\Controllers\UsersController::class);

  //Login Route

Route::get('/login', [App\Http\Controllers\Backend\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login/submit', [App\Http\Controllers\Backend\Auth\LoginController::class, 'login'])->name('admin.login.submitt');

 //Logout Route
Route::post('/logout/submit', [App\Http\Controllers\Backend\Auth\LoginController::class, 'logout'])->name('admin.logout.submit');

   // Forget Password 
Route::get('/password/reset', [App\Http\Controllers\Backend\Auth\ForgetPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');

Route::get('/password/reset/submit', [App\Http\Controllers\Backend\Auth\ForgetPasswordController::class, 'reset'])->name('admin.password.updatet');

});
