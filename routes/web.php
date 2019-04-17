<?php

Route::get('/', function ()
{
    return view('welcome');
});
Route::resource('crud','crud_controller');
Route::get('register/','student_controller@register_frm');
Route::post('register/store','student_controller@store');
Route::get('login/','student_controller@login_frm');
Route::get('logout/','student_controller@logout');
Route::post('login/chk_login','student_controller@chk_login');


