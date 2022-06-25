<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{

    protected $fillable = [
        'nome', 'status', 'data', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function tarefas(){
        return $this->hasMany('App\Tarefa');
    }

}
