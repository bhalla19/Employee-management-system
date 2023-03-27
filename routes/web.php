<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

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

Route::get('/',[Usercontroller::class,'welcome'])->name('welcome');
Route::get('/employees',[Usercontroller::class,'user'])->name('employee');
Route::get('employee_details',[Usercontroller::class,'dashboard'])->name('Employee_details');
Route::get('/employees/create',[Usercontroller::class,'emp_reg_pg'])->name('emp_reg_pg');
Route::post('/employees/create',[Usercontroller::class,'emp_reg_data'])->name('emp_reg_data');
Route::get('/employee/delete/{id}',[Usercontroller::class,'emp_destroy'])->name('employee.delete');
Route::get('/admin',[Usercontroller::class,'admin'])->name('admin');
Route::get('/admin/create',[Usercontroller::class,'admin_create_pg'])->name('admin_create-pg');
Route::post('/admin/create',[Usercontroller::class,'admin_create'])->name('admin_create');
Route::get('/admin/delete/{id}',[Usercontroller::class,'admin_destroy'])->name('admin.delete');
Route::get('/login',[Usercontroller::class,'login_pg'])->name('login_pg');
Route::post('/login',[Usercontroller::class,'postlogin'])->name('postlogin');
Route::post('/login-admin',[Usercontroller::class,'postlogin_admin'])->name('postlogin_admin');
Route::get('/register',[Usercontroller::class,'register_pg'])->name('register_pg');
Route::post('/register',[Usercontroller::class,'postsignup'])->name('postsignup');
// Route::get('/admin/edit/{id}',[Usercontroller::class,'edit_admin'])->name('edit_admin');
// Route::post('/admin/update/{id}',[Usercontroller::class,'update_admin'])->name('update_admin');
Route::get('/holidays',[Usercontroller::class,'holidays'])->name('holidays');
Route::get('/department',[Usercontroller::class,'department'])->name('department');
Route::get('/department/create',[Usercontroller::class,'department_addDepart'])->name('department_addDepart');
Route::post('/department/create',[Usercontroller::class,'department_create'])->name('department_create');
Route::get('/department/delete/{id}',[Usercontroller::class,'department_destroy'])->name('department_destroy');
Route::get('/attendance',[Usercontroller::class,'attendance'])->name('attendance');
Route::get('/leaves',[Usercontroller::class,'leaves'])->name('leaves');
Route::get('/admin-login',[Usercontroller::class,'post_admin_login'])->name('post_admin_login');
Route::post('/admin-login',[Usercontroller::class,'postlogin_admin'])->name('postlogin_admin');
Route::get('/apply-leave',[Usercontroller::class,'leaves_form'])->name('leaves_form');
Route::post('/apply-leave',[Usercontroller::class,'leaves_data'])->name('leaves_data');
Route::get('/signout', [Usercontroller::class, 'signOut'])->name('signOut');
Route::get('/admin-signout',[Usercontroller::class,'signOut'])->name('signOut');
Route::post('/employee-details',[Usercontroller::class,'attendance_emp'])->name('employee-details');
