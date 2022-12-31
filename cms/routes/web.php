<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Display;
use App\Http\Livewire\Register;
use App\Http\Livewire\Transaksi;
use App\Http\Livewire\Itemtransaksi;
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

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/product', Display::class)->name('displayproduct');
Route::get('/cart', Itemtransaksi::class)->name('itemtransaksi');
Route::get('/transaksi', Transaksi::class)->name('transaksi');

Route::view('/dashboard', 'livewire.dashboard')->name('dashboard');
Route::view('/dashboard/tasklist', 'livewire.tabeltransaksi')->name('tabeltransaksi');
Route::view('/dashboard/product', 'livewire.tabelproduct')->name('tabelproduct');
Route::view('/dashboard/addadmin', 'livewire.addadmin')->name('addadmin');
Route::view('/dashboard/addproduct', 'livewire.addproduct')->name('addproduct');
Route::view('/dashboard/updateproduct/{id}', 'livewire.updateproduct')->name('updateproduct');