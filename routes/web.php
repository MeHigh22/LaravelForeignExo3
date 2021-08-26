<?php

use App\Http\Controllers\UserController;
use App\Models\Profil;
use App\Models\User;
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
    $users = User::all();;
    $profiles = Profil::all();
    return view('welcome', compact('users','profiles'));
});

Route::resource('users', UserController::class);

