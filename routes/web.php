<?php

use App\Models\{
    Incident,
    Type,
    Criticality
};
use App\Http\Controllers\{
    IncidentController
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/incidents', [IncidentController::class, 'index'])->name('incidents.list');
Route::get('/incidents/create', [IncidentController::class, 'create'])->name('incidents.create');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');

Route::get('/', function () {
    $incident = count(Incident::all());
    $type = count(Type::all());
    $criticality = count(Criticality::all());
    return view('welcome', compact('incident', 'type', 'criticality'));
})->name('home');
