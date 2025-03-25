<?php

use App\Http\Controllers\UserAgentParserController;
use Illuminate\Support\Facades\Route;

Route::get('/device/info', [UserAgentParserController::class, 'getDeviceInfo']);
