<?php

use App\Http\Controllers\{CriticalityController, IncidentController, TypeController};
use App\Models\{Criticality, Incident, Type};
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

Route::get('/incident', [IncidentController::class, 'index'])->name('incident.list');
Route::get('/incident/create', [IncidentController::class, 'create'])->name('incident.create');
Route::post('/incident', [IncidentController::class, 'store'])->name('incident.store');

Route::get('/criticality', [CriticalityController::class, 'index'])->name('criticality.list');
Route::get('/criticality/create', [CriticalityController::class, 'create'])->name('criticality.create');
Route::post('/criticality', [CriticalityController::class, 'store'])->name('criticality.store');

Route::get('/type', [TypeController::class, 'index'])->name('type.list');
Route::get('/type/create', [TypeController::class, 'create'])->name('type.create');
Route::post('/type', [TypeController::class, 'store'])->name('type.store');


Route::get('/', function () {
    $incident = count(Incident::all());
    $type = count(Type::all());
    $criticality = count(Criticality::all());
    return view('welcome', compact('incident', 'type', 'criticality'));
})->name('home');
