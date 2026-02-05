<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Contacts\Controllers\FeedbackController;

Route::post('/feedback', FeedbackController::class);
