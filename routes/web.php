<?php

use App\Http\Controllers\ManagementUserController;

Route::resource('/users', ManagementUserController::class);