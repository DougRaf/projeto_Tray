<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=960">
    <meta name="description" content="Encontre seu animal">
    <meta name="author" content="Douglas Rafael Esquinelato">  
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">   
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">    
    <title>Encontre seu Pet</title>
  </head> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script> 
<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
        <div class="navbar-nav">
            <form class="form-inline my-2 my-lg-0" action="controles/cadUser.php" method="post">
                <input class="form-control mr-sm-2" name="email"  placeholder="Digite seu E-mail">
                <input class="form-control mr-sm-2" name="senha"  placeholder="Digite sua Senha">                
                <input type="submit" class="nav-item btn btn-outline-light" value="Login" name="entrar">&nbsp
                <a class="nav-item btn btn-outline-light" href="cadastro.php">Cadastre-se</a>
            </form> 
        </div>
    </nav>  
    <div class="container">
        <form method="post" action="controles/cadDono.php">
            <br>
                <div class="alert alert-warning" role="alert">
                    <h6> Preencha com atenção o formulario de cadastro!!!</h6>
                </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>E-MAIL</label>
                    <input type="text" placeholder="Digite seu e-mail" name="email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>NOME</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>SENHA</label>
                    <input type="password" id="field" maxlength="8"  name="senha" class="form-control" placeholder="Digite sua senha">
                </div>
                <div class="form-group col-md-4">
                    <label>CONFIRMAÇÃO</label>
                    <input type="password" id="field" maxlength="8"  name="confirma" class="form-control" placeholder="Faça a confirmação">
                </div>
                <div class="form-group col-md-4">
                    <label>TELEFONE</label>
                    <input type="text" class="form-control phone-ddd-mask" name="telefone"  placeholder="Ex.: (00) 0000-0000" maxlength="14" autocomplete="off">
                </div>
            </div>
            <button type="submit" class="btn btn-success"  href="">Enviar cadastro</button>
        </form>
    </div>
  <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
  <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
  <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <br>
  <footer>
    <div class="navbar-danger bg-danger" style="height:30px;">   
        <p style="color:white; text-align: center; padding-top: 6px;">Desenvolvimento Douglas Esquinelato</P>
    </div>
  </footer>
</body>
</html>     