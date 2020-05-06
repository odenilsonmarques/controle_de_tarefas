<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionalidade extends Model
{
    //informando para eloquent que minha chave primara é deferente do id padrão que vem no laravel
    protected $primaryKey = 'id_funcionalidade';

    //informando para o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;
    
    protected $fillable = ['nome_funcionalidade','data_inicio','data_fim','status_funcionalidade'];
    
}
