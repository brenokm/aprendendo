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

<form action="{{route('atualizar.disciplina')}}" method="POST">
  @method('PUT')
  @csrf
 <input type="hidden" name="disciplina_id" value="{{$disciplinas->disciplina_id}}">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>atualizar de Disciplina</h2>
      </div>
    </div>
    
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nomedisciplina" name="nomedisciplina" placeholder="Insira o nome" value="{{$disciplinas->disciplina_nome}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="login">Carga Horaria</label>
            <input type="text" class="form-control"  id="cargadisciplina" name="cargadisciplina" placeholder="Insira seu login" value="{{$disciplinas->disciplina_carga_horaria}}"> 
          </div>
        </div>
      </div>        
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        </div>
      </div>
    
  </div>
  
</form>
</body>
</html>