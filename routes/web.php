<?php

use App\Http\Controllers\Crudcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Crudcontroller::class,'formdata'])->name('formdata');
Route::post('/insertdata',[Crudcontroller::class,'insertdata'])->name('insertdata');
Route::get('/showdata',[Crudcontroller::class,'showdata'])->name('showdata');
Route::get('/showdata/{id}',[Crudcontroller::class,'singledata'])->name('singledata');
Route::get('/deletedata/{id}',[Crudcontroller::class,'deletedata'])->name('deletedata');
Route::get('/updatedata/{id}',[Crudcontroller::class,'updatedata'])->name('updatedata');
Route::get('/updateuser/{id}',[Crudcontroller::class,'updateuser'])->name('updateuser');
