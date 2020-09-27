<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UsersCon;
// use App\Http\Controllers\UsersController;
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


// Route::get('/dashboard', function () {
//     return view('Admin.dashboard');
// });
// Route::get('/employee-list', function () {
//     return view('Admin.employee-list');
// });
Route::get('/employee-list-add', function () {
    return view('Admin.employee-list-add');
});
// Route::get('/employee-list-edit', function () {
//     return view('Admin.employee-list-edit');
// });
Route::get('/profile', function () {
    return view('Admin.profile');
});
Route::get('/profile-edit', function () {
    return view('Admin.profile-edit');
});
Route::get('/task-board', function () {
    return view('Admin.task-board');
});
Route::get('/notes', function () {
    return view('Admin.notes');
});
// Route::get('/to-do-list', function () {
//     return view('Admin.to-do-list');
// });
Route::get('/to-do-list-add', function () {
    return view('Admin.to-do-list-add');
});
Route::get('/to-do-list-edit', function () {
    return view('Admin.to-do-list-edit');
});

Route::resource('/admin/dashboaord', 'UsersController');
Route::resource('/admin/to-do-list', 'TaskController');
Route::get('/employee-list', 'UsersController@EmployeeList');
Route::get('/to-do-list', 'TaskController@TaskList');

Route::get('/markascompleted/{id}', 'TaskController@markascompleted');
Route::get('/markasnotCompleted/{id}', 'TaskController@markasnotCompleted');
Route::get('/dashboard','UsersController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('users', UserController::class, ['except' => ['create', 'edit']]);