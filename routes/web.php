<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\WelcomeConctroller;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\EmployeeController;


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


// user auth?
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);
// Route::post('/users',[RegisterController::class,'index']);
Route::get('/logout',[LogoutController::class,'logout']);

// sites and home
Route::get('/',[SiteController::class,'index']);
// Route::get('/posts',[SiteController::class,'post']);
Route::get('/about',[SiteController::class,'about']);
Route::get('/contact',[SiteController::class,'contact']);
Route::get('/services',[SiteController::class,'services']);

Route::get('/users',[SiteController::class,'dashboard']);
Route::get('/inc',[SiteController::class,'footer']);

// return all post index
Route::get('/posts',[PostsController::class,'index']);
Route::get('/create',[PostsController::class,'create']);
Route::post('/create',[PostsController::class,'store']);
Route::post('/dashboard',[PostsController::class,'store']);
// Route::get('user_dashboard',[PostsController::class,'user']);

Route::resource('posts',PostsController::class);
Route::get('show',[PostsController::class,'show']);
// Route::get('/applicant',[UserController::class,'applicant']);
Route::post('/edit/{id}',[PostsController::class,'update']);
// Route::get('/users',[UserController::class,'index']);


Route::get('delete/{id}',[DeleteController::class,'delete']);
Route::resource('users',UserController::class);
Route::get('account',[UserController::class,'account']);
Route::post('/users',[UserController::class,'store']);
// Route::post('/users',[UserController::class,'index']);

// middleware for authentication
Route::view('/denied','denied');
Route::group(['middleware'=>'VerifyMiddleware'], function(){
   
});

Route::get('/dashboard',[WelcomeConctroller::class,'dashboard']);

// profile
Route::get('/profile',[UserController::class,'profile']);

//add users
Route::get('/user_form',[UserController::class,'user_send']);
Route::get('/add_user',[UserController::class,'create']);

// company controller
Route::resource('companies',CompanyController::class );
// company_form
Route::get('/form',[CompanyController::class ,'company_form']);

// Route::resource('applicant',ApplicantController::class);
// Route::get('applicant',[ApplicantController::class,'index']);
// Route::get('/create',[ApplicantController::class,'store']);

// Route::resource('employee',EmployeeController::class);
Route::get('employee',[EmployeeController::class,'create']);
Route::post('employee',[EmployeeController::class,'store']);
