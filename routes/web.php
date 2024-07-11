<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemsController;

//Website...
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/show-menu', [WebsiteController::class, 'menu'])->name('show-menu');
Route::get('/show-book-table', [WebsiteController::class, 'bookTable'])->name('show-book-table');

//Admin...
Route::get('/home', [AdminController::class, 'index'])->name('admin.home');

//Category...
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//Item...
Route::get('/item', [ItemsController::class, 'index'])->name('item.index');
Route::get('/item/create', [ItemsController::class, 'create'])->name('item.create');
Route::post('/item/store', [ItemsController::class, 'store'])->name('item.store');
Route::get('/item/edit/{id}', [ItemsController::class, 'edit'])->name('item.edit');
Route::post('/item/update/{id}', [ItemsController::class, 'update'])->name('item.update');
Route::get('/item/destroy/{id}', [ItemsController::class, 'destroy'])->name('item.destroy');

