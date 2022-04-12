<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetupsController;

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

Route::get('/', [MeetupsController::class, 'index'])->name('index');

Route::get('/new-meetup', [MeetupsController::class, 'newMeetupPage'])->name('new-meetup');
Route::post('/new-meetup', [MeetupsController::class, 'store'])->name('new-meetup.post');
