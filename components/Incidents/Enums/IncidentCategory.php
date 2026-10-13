<?php

namespace Italofantone\Incidents\Enums;

enum IncidentCategory: string
{
    case AUTHENTICATION = 'authentication';
    case SOFTWARE = 'software';
    case HARDWARE = 'hardware';
    case NETWORK = 'network';
    case SECURITY = 'security';
    case OTHER = 'other';
}