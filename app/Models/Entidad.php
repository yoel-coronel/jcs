<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $fillable = ['ent_secuencia','ent_nombre','ent_criterio','ent_estado'];

    public static function generateSecuencial($criterio){

        $secuencial = Entidad::where('ent_criterio',$criterio)->orderBy('ent_secuencia','DESC')->first();

        if($secuencial){
            return ((int) $secuencial->ent_secuencia) + 1;


        }else{
            return 1;
        }
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}
