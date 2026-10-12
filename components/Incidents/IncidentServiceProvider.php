<?php

namespace Italofantone\Incidents;

use Illuminate\Support\ServiceProvider;

class IncidentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');

        $this->loadViewsFrom(__DIR__.'/Views', 'incidents');

        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
    }
}
