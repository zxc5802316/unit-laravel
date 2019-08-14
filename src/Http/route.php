<?php
Route::get("/","UnitController@index")->name('zxl.index');
Route::post("/","UnitController@store")->name("zxl.store");