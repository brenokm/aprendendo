<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <p class="navbar-brand" href="#">Nome do usuario</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="bottom" title="Sair">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Cadastro de Professor</h2>
          </div>
        </div>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nomeprofessor" placeholder="Insira seu nome">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="loginprofessor" placeholder="Insira seu login">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senhaprofessor" placeholder="Insira sua senha">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="confirmar-senha">Confirmar Senha:</label>
                <input type="password" class="form-control" id="confirmarsenhaprofessor" placeholder="Confirme sua senha">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
    
</body>
</html>