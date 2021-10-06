<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('components.type.index', compact('types'));

    }

    public function create()
    {
        $types = Type::all();
        return view('components.type.create', compact('types'));
    }

    public function store(Request $request)
    {
        Type::create($request->all());
        return redirect()->route('type.list');
    }
}
