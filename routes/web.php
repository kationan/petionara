<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CotisationController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\EnsureUserhasRole;
use App\Http\Middleware\Authenticate;
use App\Models\Role;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get("/dashboard/cotisations", [CotisationController::class, 'index'])
    
    ->name('dashboard_cotisations');
    Route::get("/new-transaction-request", [CotisationController::class, 'newTransaction'])->name('newTransactionRequest');
    
});

Route::middleware([

])->group(function(){
    Route::get("petionara-mudepe-202303-0910-08372023-03-09-7119170b-ca41-48db-b281-4586b2685e95",
        [HomeController::class, 'index']
    )->name("adminPage");
    Route::get("petionara-mudepe-202303-0910-08372023/new-enr-user-request",
        [HomeController::class, 'index']
    )->name("newEnrUser");
    Route::Post("petionara-mudepe-202303-0910-08372023/new-enr-user-request",
        [HomeController::class, 'registerMembers']
    )->name("adminRegister");
    
    Route::Post("petionara-mudepe/ajouter-une-nouvelle-cotisation",[
        CotisationController::class, "registerNewCotisations"
    ])->name("adminregisterNewCotisation");

    Route::get("petionara-mudepe-202303-0910-08372023/new-cotisation-request",
        [HomeController::class, 'index']
    )->name("newCotisation");
});


