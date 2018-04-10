<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    
    protected $guarded = ['id']; // every field to protect

    public function getDtNascimentoPacienteAttribute($value)
    {
        $data = new \DateTime($value);
        return $data->format("d/m/Y");
    }
    
    public function setDtNascimentoPacienteAttribute($value)
    {
        $data = new \DateTime($value);
        $this->attributes['dt_nascimento_paciente'] = $data->format("Y-m-d");
    }
    
    public function tipo_atendimento(){
        return $this->belongsTo('App\TipoAtendimento', 'id_tipo_atendimento');
    }
    
}
