<?php

namespace App\Http\Controllers;

use App\Models\{Criticality, Incident, Type};
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function index()
    {
        $incidents = Incident::all();;
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

}
