<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
        'brand_name',
        'brand_code',
        'brand_address',
        'brand_image',
        'brand_code_postal',
        'brand_telefono',
        'brand_email',
        'brand_web',
        'brand_ubigeo',
        'brand_estado'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}
