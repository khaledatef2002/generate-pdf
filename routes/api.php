<?php

use App\Http\Controllers\JobApplicationsController;
use Illuminate\Support\Facades\Route;

Route::get('job-application/print', [JobApplicationsController::class, 'print']);