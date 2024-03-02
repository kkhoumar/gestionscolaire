<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

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


//route dashboard
route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
//epace etudiant
route::get('/etudiant',[EtudiantController::class,'index'])->name('etudiant');
// espace enseignant
route::get('/enseignant',[EnseignantController::class,'index'])->name('enseignant');
