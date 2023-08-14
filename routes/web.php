<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
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
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SessionController::class, 'index'])->name('login');
    Route::post('/', [SessionController::class, 'login']);
});

Route::get('/home', function(){
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [HalamanController::class, 'index']);
    Route::get('/dashboard/project-manager', [HalamanController::class, 'pm'])->middleware('userAccess:project_manager');
    Route::get('/dashboard/system-analyst', [HalamanController::class, 'sa'])->middleware('userAccess:system_analys');
    Route::get('/dashboard/uiux-designer', [HalamanController::class, 'uiux'])->middleware('userAccess:uiux_designer');
    Route::get('/dashboard/quality-assurance', [HalamanController::class, 'qa'])->middleware('userAccess:qa');
    Route::get('/dashboard/programmer', [HalamanController::class, 'programmer'])->middleware('userAccess:programmer');
    Route::get('/logout', [SessionController::class, 'logout']);
});



// Route::get('/', function () {
//     return view('layouts.master');
// });
// Route::get('/welcome', function () {
//     return view('welcome');
// });
