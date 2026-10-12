<?php

namespace Italofantone\Incidents\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IncidentController extends Controller
{
    public function index(): View
    {
        return view('incidents::index');
    }
}
