<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectelement extends Model
{
    use HasFactory;

    protected $fillable = [
        'System',
        'PyID',
        'Line_Equipment',
        'Service',
        'Area',
        'Tag',
        'Num',
        'Step_1',
        'Step_2',
        'Step_3',
        'Step_4',
        'Step_5',
        'Progress',
        'Instrument_type',
        'project_id'
    ];
}
