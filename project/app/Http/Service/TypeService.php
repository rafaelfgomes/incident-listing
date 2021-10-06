<?php

namespace App\Http\Service;

use App\Http\Repository\TypeRepository;
use Illuminate\Database\Eloquent\Collection;

class TypeService
{
  private $typeRepository;

  public function __construct(TypeRepository $typeRepository)
  {
    $this->typeRepository = $typeRepository;
  }

  public function all(): Collection
  {
    return $this->typeRepository->all();
  }

  public function getOne(int $id): object
  {
    return $this->typeRepository->getOne($id);
  }
}