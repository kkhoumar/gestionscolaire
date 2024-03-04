<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\modules\ModuleController;
use App\Http\Controllers\Admin\users\UserController as UsersUserController;
//use App\Http\Controllers\Admin\UserController;

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
/*
Route::group(['prefix' => 'admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
});*/
//connexion a l'application
route::get('/',[ConnexionController::class,'index'])->name('connexion');
route::post('/store',[ConnexionController::class,'store'])->name('connexion.store');


//partie admin
route::get('/admin',[adminController::class,'index'])->name('admin');

route::get('/create.users',[UsersUserController::class,'index'])->name('create.users');
route::post('/store.create',[UsersUserController::class,'store'])->name('store.create');

route::get('/create.module',[ModuleController::class,'index'])->name('create.module');
route::post('/store.module',[ModuleController::class,'store'])->name('store.module');
//fin  de la partie admin
//epace etudiant
route::get('/etudiant',[EtudiantController::class,'index'])->name('etudiant');
// espace enseignant
route::get('/enseignant',[EnseignantController::class,'index'])->name('enseignant');
