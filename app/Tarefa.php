<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{

    protected $fillable = [
        'nome', 'flag_concluida', 'atividade_id'
    ];

    public function atividade(){
        return $this->belongsTo('App\Atividade', 'atividade_id');
    }

}
