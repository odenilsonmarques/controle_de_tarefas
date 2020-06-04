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
        <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}">
        <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}">
    </body>
</html>