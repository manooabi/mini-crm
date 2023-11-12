<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('/login');
})->middleware('auth','isAdmin');


Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::prefix('admin')->middleware('auth','isAdmin')->group(function (){

Route::get('/dashboard',[DashBoardController::class,'index']);



Route::get('company',[CompanyController::class,'index']);
Route::get('add-company',[CompanyController::class,'create']);
Route::post('add-company',[CompanyController::class,'store']);
Route::get('edit-company/{company_id}',[CompanyController::class,'edit']);
Route::put('update-company/{company_id}',[CompanyController::class,'update']);



Route::post('delete-company',[CompanyController::class,'destroy']);



Route::get('employees',[EmployeeController::class,'index']);

 Route::get('add-employee',[EmployeeController::class,'create']);
 Route::post('add-employee',[EmployeeController::class,'store']);
 Route::get('employee/{employee_id}',[EmployeeController::class,'edit']);
 Route::put('update-employee/{employee_id}',[EmployeeController::class,'update']);
 Route::get('delete-employee/{employee_id}',[EmployeeController::class,'destroy']);


 Route::get('users',[UserController::class,'index']);

 Route::get('user/{user_id}',[UserController::class,'edit']);


 Route::put('update-user/{user_id}',[UserController::class,'update']);



  
});