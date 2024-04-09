<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/employee',[EmployeeController::class, 'index']) ->name('employees.index');
Route::get('/employee/newEmployee',[EmployeeController::class, 'newEmployee']) ->name('employee.newEmployee');
Route::post('/employee',[EmployeeController::class, 'saveNewEmployee']) ->name('employee.saveNewEmployee');