<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('assets/css/estiloHeader.css')}}">
        
    </head>
    <body>
        <header>
            <!--informando que nessa parte irá ficar o cabeçalho-->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavBar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                                <a class="navbar-brand">Logo</a>
                        </div>        
                        <!--informando o  ficarrá dentro do cabeçalho-->
                        <div class="navbar-collapse collapse" id="myNavBar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Home <span class="glyphicon glyphicon-home logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                                <li><a href="#">Projetos <span class="glyphicon glyphicon-th logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                                <li><a href="#">Contatos <span class="glyphicon glyphicon-earphone logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                                <li><a href="#">Sobre <span class="glyphicon glyphicon-tasks logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                            </ul>
                        </div>   
                    </div>
                </div>
            </nav><br>
            <div class="jumbotron text-center">
                <h2>Control Projetos</h2><br>
                <h3>Controle seus projetos na palma da mão</h3>
            </div>
        </header>
        <article style="margin-top: 5%">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <span class="glyphicon glyphicon-th" style="color:#B22222;font-size:50px"></span>
                        <h3 style="color:#B22222">Total de Projetos</h3>
                    </div>
                    <div class="col-lg-3 text-center">
                        <span class="glyphicon glyphicon-thumbs-up" style="color:#B22222;font-size:50px"></span>
                        <h3 style="color:#B22222">Concluídos</h3>
                    </div>
                    <div class="col-lg-3 text-center">
                        <span class="glyphicon glyphicon-hourglass" style="color:#B22222;font-size:50px"></span>
                        <h3 style="color:#B22222">Desenvolvimentos</h3>
                    </div>
                    <div class="col-lg-3 text-center">
                        <span class="glyphicon glyphicon-thumbs-down" style="color:#B22222;font-size:50px"></span>
                        <h3 style="color:#B22222">Pendentes</h3>
                    </div>
                </div>
            </div>
        </article>
        <section style="margin-top: 7%"> 
            <div class="container-fluid" style="background-color: #4F4F4F">
                <div class="container" style="margin-top: 5%">
                    <div class="row">
                        <div class="col-lg-10">
                            <p style="font-size:20px;text-align:justify;color:#FFF">
                                Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="col-lg-2 text-center">
                            <span class="glyphicon glyphicon-comment" style="color:#B22222;font-size:50px"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}">
        <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}">
    </body>
</html>