<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\instansiController;
use App\Http\Controllers\departemenController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\sbuController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\jenisController;
use App\Http\Controllers\statusController;
use App\Http\Controllers\holdingController;
use App\Http\Controllers\hadjiKallaController;
use App\Http\Controllers\bumiKarsaController;
use App\Http\Controllers\bumiLintasTamaController;
use App\Http\Controllers\bumiSaranaUtamaController;
use App\Http\Controllers\bumiJasaUtamaController;
use App\Http\Controllers\karsIntiUtamaController;
use App\Http\Controllers\barugaAsrinusaDevController;
use App\Http\Controllers\bumiSaranaBetonController;
use App\Http\Controllers\kallaIntiKarsaController;
use App\Http\Controllers\intiKarsaPersadaController;

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
Route::get('/', function (){
    return view('admin.adminlogin');
});

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);

Route::get('/logout', [loginController::class, 'logout']);

Route::middleware('auth')->group(function(){

Route::get('/tambah', function(){
    return view('data_keseluruhan.create');
});

Route::resource('/dashboard', dashboardController::class);

//route tiap sbu
Route::resource('/holding', holdingController::class);
Route::resource('/hadjikalla', hadjiKallaController::class);
Route::resource('/bumikarsa', bumiKarsaController::class);
Route::resource('/bumilintastama', bumiLintasTamaController::class);
Route::resource('/bumisaranautama', bumiSaranaUtamaController::class);
Route::resource('/bumijasautama', bumiJasaUtamaController::class);
Route::resource('/karsintiutama', karsIntiUtamaController::class);
Route::resource('/barugaAsrinusaDev', barugaAsrinusaDevController::class);
Route::resource('/bumiSaranaBeton', bumiSaranaBetonController::class);
Route::resource('/kallaIntiKarsa', kallaIntiKarsaController::class);
Route::resource('/intiKarsaPersada', intiKarsaPersadaController::class);

Route::resource('/departemen', departemenController::class);

Route::resource('/instansi', instansiController::class);

Route::resource('/jenis', jenisController::class);

Route::resource('/status', statusController::class);

Route::resource('/registrasi', registrasiController::class);

// Route::get('/search', [registrasiController::class, 'search']);

Route::resource('/sbu', sbuController::class);

});
