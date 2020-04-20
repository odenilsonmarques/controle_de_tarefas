<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    //informando para eloquent que minha chave primara é deferente de id
    protected $primaryKey = 'id_tarefas';

    //informando para o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;

    
}
