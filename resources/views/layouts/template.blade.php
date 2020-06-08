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
                                <a class="navbar-brand">Controle de Projeto</a>
                        </div>        
                        <!--informando que essa parte ficará dentro do cabeçalho-->
                        <div class="navbar-collapse collapse" id="myNavBar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Home <span class="glyphicon glyphicon-home logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                                <li><a href="#">Projetos <span class="glyphicon glyphicon-th logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                                <li><a href="#">Sobre <span class="glyphicon glyphicon-tasks logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                                <li><a href="#">Contatos <span class="glyphicon glyphicon-earphone logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                                <li><a href="#">Login <span class="glyphicon glyphicon-user logo-small" style="color:#FFF;font-size:15px"></span></a></li>
                            </ul>
                        </div>   
                    </div>
                </div>
            </nav><br>
            <div class="jumbotron text-center">
                <h2>Control Project</h2><br>
                <h3>Controle seus projetos na palma da mão</h3>
            </div>
        </header>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <span class="glyphicon glyphicon-th"></span>
                        <h3>Total de Projetos</h3>
                    </div>
                    <div class="col-lg-3 text-center">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        <h3>Concluídos</h3>
                    </div>
                    <div class="col-lg-3 text-center">
                        <span class="glyphicon glyphicon-hourglass"></span>
                        <h3>Desenvolvimentos</h3>
                    </div>
                    <div class="col-lg-3 text-center">
                        <span class="glyphicon glyphicon-thumbs-down"></span>
                        <h3>Pendentes</h3>
                    </div>
                </div>
            </div>
        </article>
        <section> 
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="col-lg-2 text-center">
                            <span class="glyphicon glyphicon-signal"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section> 
            <div class="container-fluid" id="contato">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <p><strong>Entre em contato e retornaremos em até 24h</strong></p>
                            <p>
                                <span class="glyphicon glyphicon-map-marker"></span>
                                São José de Ribamar - MA
                            </p>
                            <p>
                                <span class="glyphicon glyphicon-phone"></span>
                                +55 (98)98106 - 1009
                            </p>
                            <p>
                                <span class="glyphicon glyphicon-envelope"></span>
                                odmarquesgm@gmail.com
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
                                    </div>
                                        
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Digite a mensagem"></textarea><br>
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <button type="submite" class="btn btn-default">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            &copy 2020 control projeto || by odweb.com.br
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}">
        <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}">
    </body>
</html>