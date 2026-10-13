<?php

namespace Italofantone\Incidents\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Italofantone\Incidents\Actions\AnalyzeIncident;
use Italofantone\Incidents\Actions\CreateIncident;
use Italofantone\Incidents\Models\Incident;
use Throwable;

class IncidentController extends Controller
{
    public function index(): View
    {
        $incidents = Incident::latest()->get();

        return view('incidents::index', compact('incidents'));
    }

    public function store(
        Request $request,
        AnalyzeIncident $analyzeIncident,
        CreateIncident $createIncident,
    ): RedirectResponse {
        $validated = $request->validate([
            'description' => 'required|string|min:10|max:5000',
        ]);

        try {
            $analysis = $analyzeIncident->execute($validated['description']);
        
            $createIncident->execute($validated['description'], $analysis);
        } catch (Throwable $th) {
            return back()->withErrors($th->getMessage());
        }

        return redirect()->route('incidents.index');
    }

    public function show(Incident $incident): View
    {
        return view('incidents::show', compact('incident'));
    }
}
