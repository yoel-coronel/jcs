<?php

namespace App\Models;

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
            'brand_code_distrito',
            'brand_code_provincia',
            'brand_code_departamento',
            'brand_ubigeo',
            'brand_estado'
    ];
}
