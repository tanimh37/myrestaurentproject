<?php

use App\Http\Controllers\backend\SpecialofferController;
use App\Http\Controllers\ProfileController;
use App\Models\SpecialOffer;
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

Route::get('/', function () {
    return view('welcome');
});
// admin dashboard
// Route::get('/admin/dashboard', function () {
//     return view('backend.admin_dashboard');
// })->middleware(['auth:admin',])->name('admin_dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// admin Routes

Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);


});

Route::middleware('auth:admin')->prefix('admin')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::view('/dashboard','backend.admin_dashboard');
    Route::resource('/specialoffer',SpecialofferController::class);

});

// Customer Routes

Route::middleware('guest:customer')->prefix('customer')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Customer\LoginController::class, 'login'])->name('customer.login');
    Route::post('login', [App\Http\Controllers\Auth\Customer\LoginController::class, 'check_user']);


});

Route::middleware('auth:customer')->prefix('customer')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Customer\LoginController::class, 'logout'])->name('customer.logout');

    Route::view('/dashboard','backend.customer_dashboard');

});

