<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable =
    [
        'manufacturer',
        'model_name',
        'version',
        'powertrain',
        'transmission',
        'fuel_type',
        'model_year',
    ];
}
