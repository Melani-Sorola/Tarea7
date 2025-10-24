<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ActivityController;

Route::resource('subjects', 'SubjectController');
Route::resource('activities', 'ActivityController');