<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KKNController;
use App\Http\Controllers\KPController;
use App\Http\Controllers\MBKMController;

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
//     return view('welcome');
// });

// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/datakp', [kpcontroller::class, 'index']);
// Route::get('/datakkn', [kkncontroller::class, 'index']);
// Route::get('/beranda', [BerandaController::class, 'index']);
// Route::get('/search', [searchcontroller::class, 'index']);
// Route::get('/', [KKNController::class, 'index']);
// Route::get('/kp', [KPController::class, 'index'])->name('kp.index');
// Route::get('/kkn', [KKNController::class, 'index'])->name('kkn.index');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// fix routes
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/mbkm', [MBKMController::class, 'index']);
Route::get('/kp', [KPController::class, 'index']);
Route::get('/kkn', [KKNController::class, 'index']);


// admin 
Route::middleware('auth')->group(function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin');

  Route::get('admin/create/mbkm', [MBKMController::class, 'showCreate'])->name('admin.create.mbkm');
  Route::get('admin/create/kp', [KPController::class, 'showCreate'])->name('admin.create.kp');
  Route::get('admin/create/kkn', [KKNController::class, 'showCreate'])->name('admin.create.kkn');

  Route::post('admin/create/mbkm', [MBKMController::class, 'createMBKM'])->name('admin.create.mbkm');
  Route::post('admin/create/kp', [KPController::class, 'createKP'])->name('admin.create.kp');
  Route::post('admin/create/kkn', [KKNController::class, 'createKKN'])->name('admin.create.kkn');

  Route::get('admin/delete/mbkm', [MBKMController::class, 'showDelete'])->name('admin.delete.mbkm');
  Route::get('admin/delete/kp', [KPController::class, 'showDelete'])->name('admin.delete.kp');
  Route::get('admin/delete/kkn', [KKNController::class, 'showDelete'])->name('admin.delete.kkn');

  Route::get('admin/delete/mbkm/{id}', [MBKMController::class, 'deleteMBKM'])->name('admin.delete.mbkm');
  Route::get('admin/delete/kp/{id}', [KPController::class, 'deleteKP'])->name('admin.delete.kp');
  Route::get('admin/delete/kkn/{id}', [KKNController::class, 'deleteKKN'])->name('admin.delete.kkn');

  // Route::get('/admin/create/{type}', [AdminController::class, 'showCreate']);
  // Route::get('/admin/delete/{type}', [AdminController::class, 'showDelete']);

  // Route::get('/admin/kp/delete/{id}', [AdminController::class, 'deleteKP'])->name('admin.delete.kp');

  // Route::post('/admin/create/kp', [AdminController::class, 'postKP'])->name('admin.create.kp');
  // Route::post('/admin/create/mbkm', [AdminController::class, 'postMBKM'])->name('admin.create.mbkm');
  // Route::post('/admin/create/kkn', [AdminController::class, 'postKKN'])->name('admin.create.kkn');
});

Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');
