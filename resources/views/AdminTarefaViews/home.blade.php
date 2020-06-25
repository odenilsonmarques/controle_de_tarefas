@extends('adminlte::page')

<!--trocando o titulo da home-->
@section('title','home')

@section('content')
    <div class="container-fluid">
        <h3><strong>Projetos</strong></h3>
        <div class="row">
            <div class="col-lg-3">
                <div class="small-box bg-primary">
                    <div class="inner"> 
                        <h3>{{$totalProjetos}}</h3>
                            <a href="{{route('listProj')}}">
                            <h5 style="color:#FFF">Total de Projetos</h5><br />
                        </a>
                    </div>
                    <div class="icon">
                        <i class="far fa fa-th"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="small-box bg-warning">
                    <div class="inner"> 
                        <h3>{{$projetosEmDesenvolvimento}}</h3>
                            <h5 style="color:#FFF">Projetos Em Desenvolvimento</h5> 
                    </div>
                    <div class="icon">
                        <i class="far fa fa-hourglass-half"></i>
                    </div>
                </div>
            </div>  
            <div class="col-lg-3">
                <div class="small-box bg-success">
                    <div class="inner"> 
                        <h3>{{$projetosConcluídos}}</h3>
                            <h5 style="color:#FFF">Projetos Concluídos</h5><br /> 
                    </div>
                    <div class="icon">
                        <i class="far fa-thumbs-up"></i>
                    </div>
                </div>
            </div>        
            <div class="col-lg-3">
                <div class="small-box bg-danger">
                    <div class="inner"> 
                        <h3>{{$projetosPendentes}}</h3>
                            <h5 style="color:#FFF">Projetos Pendentes</h5><br /> 
                    </div>
                    <div class="icon">
                        <i class="far fa-thumbs-down"></i>
                    </div>
                </div>
            </div>                                         
        </div>
        <div class="card-footer fixed" style="margin-top:140px">
            <div class="float-right">
                <!--essa informação foi declarada no arquivo AppServiceProvider-->
                <b>Versão: {{$versao}}</b>
            </div>
        </div>
    </div>
@endsection