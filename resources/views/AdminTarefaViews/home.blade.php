@extends('adminlte::page')

<!--trocando o titulo da home-->
@section('title','tarefas')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="small-box bg-info">
                <div class="inner"> 
                    <h3>{{$TotalTarefa}}</h3>
                        <a href="{{route('list')}}">
                        <h5 style="color:#FFF">Total de Tarefas</h5><br />
                    </a>
                </div>
                <div class="icon">
                    <i class="far fa  fa-list-alt"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="small-box bg-success">
                <div class="inner"> 
                    <h3>{{$TarefasConcluídas}}</h3>
                        <h5 style="color:#FFF">Tarefas Concluídas</h5><br /> 
                </div>
                <div class="icon">
                    <i class="far fa-thumbs-up"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="small-box bg-warning">
                <div class="inner"> 
                    <h3>{{$TarefasEmDesenvolvimento}}</h3>
                        <h5 style="color:#FFF">Tarefas Em Desenvolvimento</h5> 
                </div>
                <div class="icon">
                    <i class="far fa fa-hourglass-half"></i>
                </div>
            </div>
        </div>  
        
        <div class="col-lg-3">
            <div class="small-box bg-danger">
                <div class="inner"> 
                    <h3>{{$TarefasPendentes}}</h3>
                        <h5 style="color:#FFF">Tarefas Pendentes</h5><br /> 
                </div>
                <div class="icon">
                    <i class="far fa-thumbs-down"></i>
                </div>
            </div>
        </div>                                         
    </div>
</div>
@endsection