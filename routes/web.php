<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\TagsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Admin','prefix'=>'admin','as'=>'admin.'],function (){
    Route::get('/',[MainController::class,'index'])->name('index');
    Route::group(['prefix'=>'category','as'=>'category.'],function (){
        Route::get('/',[CategoryController::class,'index'])->name('index');
        Route::get('/create',[CategoryController::class,'create'])->name('create');
        Route::post('/create',[CategoryController::class,'store'])->name('store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('update');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('delete');
    });
    Route::group(['prefix'=>'tags','as'=>'tags.'],function (){
        Route::get('/',[TagsController::class,'index'])->name('index');
        Route::get('/create',[TagsController::class,'create'])->name('create');
        Route::post('/create',[TagsController::class,'store'])->name('store');
        Route::get('/edit/{id}',[TagsController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[TagsController::class,'update'])->name('update');
        Route::get('/delete/{id}',[TagsController::class,'delete'])->name('delete');

    });
});


