<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\{
    Incident,
    Criticality,
    Type
};
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function index()
    {
        $incidents = Incident::all();;
        return view('admin.incident.index', compact('incidents'));

    }

    public function create()
    {
        $types = Type::all();
        $criticalities = Criticality::all();

        return view('admin.incident.create', compact('types', 'criticalities'));
    }

    public function store(Request $request)
    {
        Incident::create($request->all());

        return redirect()->route('incidents.list');
    }

}
