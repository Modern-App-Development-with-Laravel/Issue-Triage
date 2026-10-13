<?php

use Italofantone\Incidents\Actions\CreateIncident;
use Italofantone\Incidents\Data\IncidentAnalysisDTO;
use Italofantone\Incidents\Enums\IncidentCategory;
use Italofantone\Incidents\Enums\IncidentPriority;
use Italofantone\Incidents\Models\Incident;

it('creates an incident from the analysis DTO', function () {
    $description = 'This is a test incident description';

    $analysis = new IncidentAnalysisDTO(
        title: 'Test Incident',
        category: IncidentCategory::OTHER->value,
        priority: IncidentPriority::HIGH->value,
        impact: 'Test impact',
        recommendations: [
            'Test recommendation'
        ],
    );

    $incident = app(CreateIncident::class)->execute(
        $description,
        $analysis,
    );

    expect($incident)->toBeInstanceOf(Incident::class)
        ->and($incident->description)->toBe($description);

    $this->assertDatabaseHas('incidents', [
        'title' => 'Test Incident',
        'description' => $description,
    ]);
});