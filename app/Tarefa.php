<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    //informando para eloquent que minha chave primara é deferente do id padrão que vem no laravel
    protected $primaryKey = 'id_tarefas';

    //informando para o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;
    
    protected $fillable = ['nome_tarefa','data_inicio','data_fim','status_tarefa'];
    
}
