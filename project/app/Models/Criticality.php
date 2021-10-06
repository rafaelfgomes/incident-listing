<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criticality extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'criticalities';
    protected $fillable = ['name'];

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }
}
