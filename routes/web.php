<?php

use App\Http\Controllers\EmpContoller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-user',[UserController::class, 'insertRecords']);

Route::get('/get-phone/{id}', [UserController::class, 'fetchPhoneByUser']);

Route::get('/add-post', [PostController::class , "addPost"]);
Route::get('/add-comment/{id}', [PostController::class , "addComment"]);
Route::get('/get-comments/{id}', [PostController::class, 'getCommentByPost']);

Route::get('/add-roles',[RoleController::class, 'addRole']);

Route::get('add-users', [RoleController::class, 'addUser']);

Route::get('/rolebyuser/{id}', [RoleController::class, 'getAllRolesByUser']);

Route::get('/userbyrole/{id}', [RoleController::class, 'getAllUsersByRole']);

Route::get('/add-employee', [EmployeeController::class, 'addEmployees']);

Route::get('/export-excel', [EmployeeController::class, 'exportIntoExcel']);

Route::get('/export-csv', [EmployeeController::class, 'exportIntoCsv']);

Route::get('/get-all-employee', [EmpContoller::class, 'getAllEmployees']);

Route::get('/download-pdf', [EmpContoller::class, 'downloadPDF']);

Route::get('/import-form', [EmployeeController::class, 'importForm']);

Route::post('/import', [EmployeeController::class, 'import']);