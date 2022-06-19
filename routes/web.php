<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//Group for admin
Route::prefix('admin/')->group(function (){
    //Group for AdminController::class
    Route::controller(AdminController::class)->group(function (){
        //Admin Login Route without admin group
        Route::match(['get','post'],'login','login');

        //Admin dashboard Route without admin group
        Route::get('dashboard','dashboard');
    });
});

