<?php

namespace Italofantone\Incidents\Actions;

use Italofantone\Incidents\Enums\IncidentCategory;
use Italofantone\Incidents\Enums\IncidentPriority;
use Italofantone\Incidents\Enums\IncidentStatus;
use Italofantone\Incidents\Models\Incident;

class CreateIncident
{
    public function execute(
        string $description,
        array $analysis,
    ): Incident {
        return Incident::create([
            'title' => $analysis['title'],
            'category' => IncidentCategory::from($analysis['category']),
            'status' => IncidentStatus::OPEN,
            'priority' => IncidentPriority::from($analysis['priority']),
            'description' => $description,
            'impact' => $analysis['impact'],
            'recommendations' => $analysis['recommendations']
        ]);
    }
}