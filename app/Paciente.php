<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    
    protected $guarded= []; // every field to protect

    
    public function tipo_atendimento(){
        return $this->hasOne('App\TipoAtendimento', 'id_tipo_atendimento');
    }
    
}
