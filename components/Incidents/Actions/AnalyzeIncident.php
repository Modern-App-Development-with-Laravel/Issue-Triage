<?php

namespace Italofantone\Incidents\Actions;

use Italofantone\Incidents\Agents\IncidentTriage;
use Italofantone\Incidents\Data\IncidentAnalysisDTO;
use Laravel\Ai\Enums\Lab;

class AnalyzeIncident
{
    public function execute(string $description): IncidentAnalysisDTO
    {
        $response = (new IncidentTriage)->prompt(
            $description,
            provider: Lab::OpenAI,
            model: 'gpt-4o-mini',
        );

        return IncidentAnalysisDTO::fromArray(
            $response->toArray()
        );
    }
}