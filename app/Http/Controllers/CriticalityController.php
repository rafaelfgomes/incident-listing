<?php

namespace App\Http\Controllers;

use App\Models\Criticality;
use Illuminate\Http\Request;

class CriticalityController extends Controller
{
    public function index()
    {
        $criticalities = Criticality::all();;
        return view('components.criticality.index', compact('criticalities'));
    }

    public function create()
    {
        $criticalities = Criticality::all();
        return view('components.criticality.create', compact('criticalities'));
    }

    public function store(Request $request)
    {
        Criticality::create($request->all());
        return redirect()->route('criticality.list');
    }
}
