<?php

namespace App\Http\Controllers;

use App\Http\Service\IncidentService;
use App\Http\Service\TypeService;
use App\Models\{Criticality, Incident};
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    private $incidentService;
    private $typeService;

    public function __construct(IncidentService $incidentService, TypeService $typeService)
    {
        $this->incidentService = $incidentService;
        $this->typeService = $typeService;
    }

    public function index()
    {
        $incidents = $this->incidentService->index();
        
        return view('components.incident.index', compact('incidents'));
    }

    public function create()
    {
        $types = $this->typeService->all();
        $criticalities = Criticality::all();
        return view('components.incident.create', compact('types', 'criticalities'));
    }

    public function store(Request $request)
    {
        Incident::create($request->all());
        return redirect()->route('incident.list');
    }

    public function edit($id)
    {
        if (!$incidentValues = Incident::find($id)) {
            return redirect()->back();
        }

        $criticalitie = $this->getCriticality($incidentValues->criticality_id);
        $type = $this->typeService->getOne($incidentValues->type_id);
        return view('components.incident.edit', compact('incidentValues', 'type', 'criticalitie'));
    }

    public function update(Request $request, $id)
    {
        if (!$incidentValues = Incident::find($id)) {
            return redirect()->back();
        }

        $incidentValues->update($request->all());
        return redirect()->route('incident.list');
    }

    public function delete($id)
    {
        if (!$incidentValues = Incident::find($id))
            redirect()->route('incident.list');

        $incidentValues->delete();
        return redirect()->route('incident.list');
    }

    public function getCriticality($id)
    {
        return Criticality::find($id);
    }
}
