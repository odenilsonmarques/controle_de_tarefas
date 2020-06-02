<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
    </head>
    <body>
        <header>
            <!--informando que nessa parte irá ficar o cabeçalho-->
            <nav class="navbar navbar-default">
                <div class="container-fluid" style="background-color:#FF8C00">
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
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Projetos</a></li>
                                <li><a href="#">Contatos</a></li>
                                <li><a href="#">Sobre</a></li>
                            </ul>
                        </div>   
                    </div>
                </div>
            </nav>
        </header>
        <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}">
        <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}">
    </body>
</html>