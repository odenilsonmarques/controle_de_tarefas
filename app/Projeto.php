<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    //informando para eloquent que minha chave primara é deferente do id padrão que vem no laravel
    protected $primaryKey = 'id_projeto';

    //informando para o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;

    protected $fillable = ['nome_projeto','descricao','data_inicio','data_fim','status_projeto'];

    public function funcionalidades(){
        return $this->hasMany(Funcionalidade::class,'projeto_id','id_projeto');
    }
}
