<?php

namespace Italofantone\Incidents\Data;

class IncidentAnalysisDTO
{
    public function __construct(
        public string $title,
        public string $category,
        public string $priority,
        public string $impact,
        public array $recommendations,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            title: $data['title'],
            category: $data['category'],
            priority: $data['priority'],
            impact: $data['impact'],
            recommendations: $data['recommendations'],
        );
    }
}