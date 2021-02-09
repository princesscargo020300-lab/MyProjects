<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reservation;
use App\Http\Controllers\Dbresults;








Route::get('/', function () {
    return view('welcome');
});


Route::get('/Rateinformation', function () {
    return view('Rateinformation');
});


Route::get('/master', function () {
    return view('layouts.master');
});



Route::view('/Addrecord','Addrecord');

Route::post('insert',[Reservation::class,'ADD']);


Route::get('Results',[Dbresults::class,'DISPLAYDATA']);


Route::get('delete/{id}',[Dbresults::class,'DELETEDATA']);



Route::get('showupdates/{id}',[Dbresults::class,'SHOWUPDATE']);

Route::get('showprint/{id}',[Dbresults::class,'SHOWPRINT']);



Route::post('update',[Dbresults::class,'UPDATERECORD']);