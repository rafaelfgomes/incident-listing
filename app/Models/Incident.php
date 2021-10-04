<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $table = 'incidents';
    protected $fillable = [
        'title',
        'description',
        'fk_criticality_id',
        'fk_type_id',
    ];
}
