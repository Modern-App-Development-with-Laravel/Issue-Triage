<?php

use Illuminate\Support\Facades\Route;
use Italofantone\Incidents\Http\Controllers\IncidentController;

Route::middleware('web')
    ->group(function () {
        Route::get('incidents', [IncidentController::class, 'index'])->name('incidents.index');

        Route::post('incidents', [IncidentController::class, 'store'])->name('incidents.store');

        Route::get('incidents/{incident}', [IncidentController::class, 'show'])->name('incidents.show');
    });

Route::get('test', function () {
    //dd(\Italofantone\Incidents\Enums\IncidentCategory::cases());
    //dd(array_column(\Italofantone\Incidents\Enums\IncidentCategory::cases(), 'name'));
    //dd(array_column(\Italofantone\Incidents\Enums\IncidentCategory::cases(), 'value'));
});