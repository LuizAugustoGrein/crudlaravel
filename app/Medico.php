<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'nome',
        'crm'
    ];

    /*
    * criar uma funçao para estabelecer a associação (relacionamento)
    * entre a classe 'Medico' e a classe 'Consulta'
    */
    public function consulta(){
        // especificar o tipo de associação
        return $this->hasMany(Consulta::class);   
    }
}
