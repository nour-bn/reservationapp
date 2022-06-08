<?php

use Illuminate\Support\Facades\Route;

Route::get('/Admin', function () {
    return view('AdminPage');
})->name('Admin');

Route::namespace('App\Http\Controllers\Admin')->group(function (){
    /* route teacher */
    Route::get('/', 'Teachear@show')->name('Teachers');
    Route::get('/Form', 'Teachear@index')->name('Form');
    Route::put('/create', 'Teachear@create')->name('createTech');
    Route::get('delete/{id}', 'Teachear@destroy');
    Route::put('update/{id}', 'Teachear@update');
    Route::get('click_edit/{id}', 'Teachear@edit');

    /*route Reservationn*/
    Route::get('/Res', 'Reservationn@show')->name('Reservationn');
    Route::get('deleted/{id}', 'Reservationn@destroy');
    Route::put('updated/{id}', 'Teachear@update');

    /*route room amphis managemant*/
    Route::get('/Rom', 'RoomAmphis@show')->name('RoomAmphii');
    Route::get('/Fo', 'RoomAmphis@index')->name('Form');
    Route::put('/cre', 'RoomAmphis@create')->name('createrooAmph');
    Route::get('dele/{idroomamphi}', 'RoomAmphis@destroy');
    Route::put('upda/{idroomamphi}', 'RoomAmphis@update');
    Route::get('click_ed/{id}', 'RoomAmphis@edit');


    /*route slot */
    Route::get('/st', 'stats@show')->name('stats');
    Route::get('/Fr', 'stats@index')->name('Form');
    Route::put('/cer', 'stats@create')->name('createslot');
    Route::get('delee/{id}', 'stats@destroy');
    Route::put('updaa/{id}', 'stats@update');
    Route::get('click_e/{id}', 'stats@edit');

    /*route person admin*/
    Route::get('/Pe', 'AdminPer@show')->name('AdminPer');
    Route::get('/For', 'AdminPer@index')->name('Form');
    Route::put('crea/', 'AdminPer@create')->name('createPer');
    Route::get('delet/{id}', 'AdminPer@destroy');
    Route::put('updat/{id}', 'AdminPer@update');
    Route::get('click_edi/{id}', 'AdminPer@edit');



    /*route material*/
    Route::get('/Mat', 'Materials@show')->name('Materials');
    Route::get('/Fs', 'Materials@index')->name('Form');
    Route::put('/cb', 'Materials@create')->name('creatmat');
    Route::get('delett/{id}', 'Materials@destroy');
    Route::put('updatt/{id}', 'Materials@update');
    Route::get('click_edii/{id}', 'Materials@edit');

    /*route teacher grade */
    Route::get('/Tea', 'TeachGrade@show')->name('TeachGrade');
    Route::get('/Fu', 'TeachGrade@index')->name('Form');
    Route::put('/c', 'TeachGrade@create')->name('creategrad');
    Route::get('del/{id}', 'TeachGrade@destroy');
    Route::put('updd/{id}', 'TeachGrade@update');
    Route::get('click_e/{id}', 'TeachGrade@edit');

    /*route room type */
    Route::get('/Ro', 'RoomType@show')->name('RoomType');
    Route::get('/F', 'RoomType@index')->name('Form');
    Route::put('/cr', 'RoomType@create')->name('createtype');
    Route::get('dell/{id}', 'RoomType@destroy');
    Route::put('uppd/{id}', 'RoomType@update');
    Route::get('click_edit/{id}', 'RoomType@edit');
});


