<?php

use App\Http\Controllers\{
    DashboardControler,
};
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

Route::group([
    'middleware' => ['auth', 'role:admin|user']
], function () {
    //Dashboard Admin dan User
    Route::get('/dashboard', [DashboardControler::class, 'index'])->name('dashboard');

    Route::group([
        'middleware' => 'role:admin'
    ], function() {
        //
    });

    Route::group([
        'middleware' => 'role:user'
    ], function() {
        //
    });
});

