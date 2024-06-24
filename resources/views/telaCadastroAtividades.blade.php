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


    <form action="{{route('criar.atividade')}}" method="POST">
      @csrf
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Cadastro de Atividade</h2>
          </div>
        </div>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nomeatividade" name="nomeatividade" placeholder="Insira o nome">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="descricaoatividade">Descrição:</label>
                <input type="text" class="form-control" id="descricaoatividade" name="descricaoatividade" placeholder="Insira o nome">
              </div>
            </div>

            <div class="form-group">
              <label for="idturma">Turma:</label>
              <select class="form-control" id="idturma" name="idturma" required>
                  <option value="">Selecione uma turma</option>
                  @foreach($turmas as $turma)
                      <option value="{{ $turma->turma_id }}">{{ $turma->turma_nome }}</option>
                  @endforeach
              </select>
          </div>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
      
      
    </form>
    </body>
    </html>