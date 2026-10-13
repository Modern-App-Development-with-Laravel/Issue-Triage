<?php

namespace Italofantone\Incidents\Actions;

use Italofantone\Incidents\Agents\IncidentTriage;
use Laravel\Ai\Enums\Lab;

class AnalyzeIncident
{
    public function execute(string $description): array
    {
        $response = (new IncidentTriage)->prompt(
            $description,
            provider: Lab::OpenAI,
            model: 'gpt-4o-mini',
        );

        return $response->toArray();        
    }
}