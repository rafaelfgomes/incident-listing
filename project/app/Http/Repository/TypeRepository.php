<?php

namespace App\Http\Repository;

use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;

class TypeRepository
{
  private $type;

  public function __construct(Type $type)
  {
    $this->type = $type;
  }

  public function all(): Collection
  {
    return $this->type->all();
  }

  public function getOne(int $id): object
  {
    return $this->type->find($id);
  }
}