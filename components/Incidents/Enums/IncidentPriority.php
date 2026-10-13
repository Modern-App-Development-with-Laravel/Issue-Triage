<?php

namespace Italofantone\Incidents\Enums;

enum IncidentPriority: string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case CRITICAL = 'critical';
}