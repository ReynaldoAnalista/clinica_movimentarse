<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{

    protected $guarded  = array('id','_token','_method');
    
    
    public function tipo_profissional(){
        return $this->belongsTo('App\TipoProfissional', 'id_especialidade');
    }

}
