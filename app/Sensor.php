<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $fillable = [
        'id_pemeriksaan',
        'fhr',
        'toco'
    ];
}
