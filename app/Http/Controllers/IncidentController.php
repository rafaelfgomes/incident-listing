<?php

namespace App\Http\Controllers;

use App\Models\{Criticality, Incident, Type};
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function index()
    {
        $incidents = Incident::join('types', 'types.id', '=', 'incidents.fk_type_id')
            ->join('criticalities', 'criticalities.id', '=', 'incidents.fk_criticality_id')
            ->get([
                'incidents.id',
                'incidents.title',
                'incidents.description',
                'types.name as types_name',
                'criticalities.name as criticalities_name',
                'incidents.status',
                'incidents.created_at',
            ]);

        return view('components.incident.index', compact('incidents'));
    }

    public function create()
    {
        $types = Type::all();
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

        $criticalitie = $this->getCriticality($incidentValues->fk_criticality_id);
        $type = $this->getType($incidentValues->fk_type_id);
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

    public function getType($id)
    {
        return Type::find($id);
    }

    public function getCriticality($id)
    {
        return Criticality::find($id);
    }
}
