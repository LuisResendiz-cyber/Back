<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectareas extends Model
{
    use HasFactory;
    protected $fillable = [
        'Element_id',
        'Pendiente',
        'status',
        'Element_Step'
    ];
}
