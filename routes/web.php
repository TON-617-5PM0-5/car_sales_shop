<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostSubmitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthentificationController;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');


Route::get('/admin/login', [PageController::class, 'login'])->name('login');

Route::post('/admin/logout', [AuthentificationController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('/admin/authentification', [AuthentificationController::class, 'authentificate'])->name('authentification');

Route::get('/admin', [PageController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/admin/products', [PageController::class, 'admin_products'])->name('admin_products')->middleware('auth');
Route::get('/admin/categories', [PageController::class, 'admin_categories'])->name('admin_categories')->middleware('auth');
Route::get('/admin/posts', [PageController::class, 'admin_posts'])->name('admin_posts')->middleware('auth');

Route::post('/admin/products/edit', [AdminController::class, 'edit_product'])->name('edit_product')->middleware('auth');
Route::post('/admin/products/create', [AdminController::class, 'create_product'])->name('create_product')->middleware('auth');
Route::post('/admin/products/delete', [AdminController::class, 'delete_product'])->name('delete_product')->middleware('auth');

Route::post('/admin/categories/edit', [AdminController::class, 'edit_category'])->name('edit_category')->middleware('auth');
Route::post('/admin/categories/create', [AdminController::class, 'create_category'])->name('create_category')->middleware('auth');

Route::get('/admin/posts/delete', [AdminController::class, 'delete_post'])->name('delete_post')->middleware('auth');

Route::post('/contact_form', PostSubmitController::class)->name('contact2');


