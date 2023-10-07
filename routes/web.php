<?php

use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('example');
// });
// Route::get('/greeting',function(){
//     return "hello world";
// })->name('greeting');
// Route::get('/greeting',function(){
//     return  view('example');
// })->name('greeting_params');
//Route::get('/greeting/{nim}',[ExampleController::class, 'show']);
Route::get('/mahasiswa', [ExampleController::class, 'show'])->name('mahasiswa')->middleware('auth');


Route::get('/add_mahasiswa', function(){
    return view('create');
})->name('tambah_data')->middleware('auth');


Route::post('/tambah_data', [ExampleController::class, 'insert'])->name('tambah_data')->middleware('auth');
Route::get('/del/mhs/{id}', [ExampleController::class, 'delete_data'])->name('hapus_data')->middleware('auth');
Route::get('/',function(){
    return view('dashboard');
})->name('home')->middleware('auth');

//untuk login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

//untuk logout
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');

//untuk edit
Route::get('/edit/{id}',[EditController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('update/{id}',[EditController::class, 'update'])->name('mhs.update')->middleware('auth');