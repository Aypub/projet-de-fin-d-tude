<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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



Route::middleware(['role:admin'])->group(function () {

    Route::get('/index', function () {
        return view('admin.index');
    })->name('index');
    
    
    Route::get('/dashbord', function () {
        return view('admin.dashbord');
    });
    
    // Route::get('/gestion_agent', function () {
    //     return view('admin.gestion_agent');
    // });

    Route::delete('/user/{id}', [UserController::class,'destroy'])->name('user.delete');


    Route::get('/gestion_agent', [UserController::class,'Afficher'])->name('admin.gestion_agent');


    Route::get('/Add_agent', function () {
        return view('admin.Add_agent');
    });
    Route::post('/Add_agent', [UserController::class,'store'])->name('Add_agent');


    
    Route::get('/profile', function () {
        return view('admin.profile');
    });

    Route::get('/Services', function () {
        return view('admin.Services');
    });
    Route::get('/Add_services', function () {
        return view('admin.Add_services');
    });



    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('Edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('Update');

    

});

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class,'store'])->name('login');
Route::get('/logout', [LoginController::class,'destroy'])->name('logout');

