<?php

namespace App\Http\Service;

use App\Http\Repository\IncidentRepository;
use Illuminate\Database\Eloquent\Collection;

class IncidentService
{
  private $incidentRepository;

  public function __construct(IncidentRepository $incidentRepository)
  {
    $this->incidentRepository = $incidentRepository;
  }

  public function index(): Collection
  {
    return $this->incidentRepository->index();
  }
}