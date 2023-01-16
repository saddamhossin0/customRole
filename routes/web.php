<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

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
    return view('admin.login');
})->middleware('loginCheck');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware('logoutCheck')->group(function (){
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('product-form', [ProductController::class, 'productForm'])->name('product.form');
    Route::post('product-store', [ProductController::class, 'store'])->name('product.store');


    Route::get('categories', [CategoryController::class, 'index'])->name('categories');
    Route::post('category-create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category-update', [CategoryController::class, 'update'])->name('category.update');
    // =============permission=========================
    Route::get('permission', [PermissionController::class, 'permissionIndex'])->name('permission');
    Route::post('store', [PermissionController::class, 'permissionStore'])->name('store');

//    ===================role==================
    Route::get('role', [RoleController::class, 'roleIndex'])->name('roleIndex');
});
