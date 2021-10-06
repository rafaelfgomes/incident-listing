<?php

namespace App\Http\Repository;

use App\Models\Incident;
use Illuminate\Database\Eloquent\Collection;

class IncidentRepository
{

  private $incident;

  public function __construct(Incident $incident)
  {
    $this->incident = $incident;
  }

  public function index(): Collection
  {
    $incidents = $this->incident->with(['type', 'criticality'])->get();

    return $incidents;
  }
}