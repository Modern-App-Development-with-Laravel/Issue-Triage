<?php

namespace Italofantone\Incidents\Models;

use Illuminate\Database\Eloquent\Model;
use Italofantone\Incidents\Enums\IncidentCategory;
use Italofantone\Incidents\Enums\IncidentPriority;
use Italofantone\Incidents\Enums\IncidentStatus;

class Incident extends Model
{
    protected $fillable = [
        'title',
        'category',
        'status',
        'priority',
        'description',
        'impact',
        'recommendations',
    ];

    protected $casts = [
        'category' => IncidentCategory::class,
        'priority' => IncidentPriority::class,
        'status' => IncidentStatus::class,
        'recommendations' => 'array',
    ];
}
