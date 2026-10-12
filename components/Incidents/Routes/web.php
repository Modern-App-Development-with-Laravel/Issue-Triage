<?php

use Illuminate\Support\Facades\Route;
use Italofantone\Incidents\Http\Controllers\IncidentController;

Route::get('incidents', [IncidentController::class, 'index']);