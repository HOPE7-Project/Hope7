<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\DoctorController;


use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;


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

Route::get('/index', function () {
    return view('Home.index');
});
Route::get('/index', [DoctorController::class,'index']);
//testimonial routes
Route::get('/userprofile/testimonial', [UserController::class, 'testimonial'])->name('testimonial');
Route::post('/userprofile/testimonial/post', [UserController::class, 'testimonialpost'])->name('testimonialpost');


//user profile routes
Route::get('/userprofile/{id}', [UserController::class, 'showuserpage']);
Route::get('/userprofile/edit/{id}', [UserController::class, 'edituserinfo'])->name('editProfile');
Route::put('/userprofile/edit/update/{id}', [UserController::class, 'updateuserinfo'])->name('updateProfile');



//Doctor Profile routes
Route::get('/doctorprofile/{id}', [DoctorController::class, 'showdoctorpage']);
Route::get('/doctorprofile/edit/{id}', [DoctorController::class, 'editdoctorinfo'])->name('editDocProfile');
Route::put('/doctorprofile/edit/update/{id}', [DoctorController::class, 'updateDoctorProfile'])->name('updateDoctorProfile');

// abou page
Route::get('/about', function () {
    return view('about');
});


// contact page
Route::get('/Contact', function () {
    return view('Contact');
});
// landing page
//Route::get('/index', function () {
//
//});
// appointment
Route::get('/appointment', function () {
    return  view('appointment');
});


// login register
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__ . '/auth.php';


// order
Route::get('/product', [ProductController::class, 'index']);
Route::get('order/{id}', [OrderController::class, 'index']);
Route::get('/orderSave/{names}/{inputId}/{inputCity}/{inputPhone}/{inputAddress}/{product_id}', [OrderController::class, 'store']);


// admin dashboard
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/admin/editUser/{id}', [AdminController::class, 'editUser']);
Route::post('/admin/storeEdit/{id}', [AdminController::class, 'storeEdit']);

Route::get('/admin/editDoctor/{id}', [AdminController::class, 'editDoctor']);
Route::post('/admin/storeEditDoctor/{id}', [AdminController::class, 'storeEditDoctor']);

Route::get('/admin/delete/{id}', [AdminController::class, 'destroy']);
Route::get('/admin/deleteDoctor/{id}', [AdminController::class, 'deleteDoctor']);

Route::get('/admin/allDoctor', [AdminController::class, 'allDoctor']);
Route::get('/admin/allUsers', [AdminController::class, 'allUsers']);
Route::get('/admin/allProduct', [AdminController::class, 'allProduct']);
Route::post('/admin/addProduct', [AdminController::class, 'addProduct']);
