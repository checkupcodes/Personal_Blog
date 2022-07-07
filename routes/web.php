<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Verified;
use App\Http\Controllers\AdminController;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Illuminate\Auth\Events\Logout;

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
//Admin All route
Route::controller(AdminController::class)->group(function(){
    Route::get('admin/logout','destroy')->name('admin.logout');
    Route::get('/profile','profile')->name('admin.profile');
    Route::get('/edit','editProfile')->name('edit.profile');
    Route::post('/store','storeProfile')->name('store.profile');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
