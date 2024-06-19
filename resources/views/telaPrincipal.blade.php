<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tela Principal</title>
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
                <h2>Cadastro</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <a href="{{route('CadastroTurma')}}" class="btn btn-primary btn-block" title="Cadastro de Turma">
                    <i class="fas fa-users"></i> Cadastar Turma
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('CadastroAtividade')}}" class="btn btn-primary btn-block" title="Cadastro de Atividade">
                    <i class="fas fa-clipboard-list"></i>Cadastar Atividade
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('CadastroAluno')}}" class="btn btn-primary btn-block"  title="Cadastro de Aluno">
                    <i class="fas fa-user-graduate"></i>Cadastar Aluno
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('CadastroSala')}}" class="btn btn-primary btn-block" title="Cadastro de Sala">
                    <i class="fas fa-door-open"></i>Cadastar Sala
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('CadastroDisciplina')}}" class="btn btn-primary btn-block" title="Cadastro de Disciplina">
                    <i class="fas fa-door-open"></i>Cadastar Disciplina
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{route('CadastroProfessor')}}" class="btn btn-primary btn-block"  title="Cadastro de Professor">
                    <i class="fas fa-door-open"></i>Cadastar Professor
                </a>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-2">
                <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Visualizar Turma">
                    <i class="fas fa-eye"></i> Turma
                </button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Visualizar Atividade">
                    <i class="fas fa-eye"></i> Atividade
                </button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Visualizar Aluno">
                    <i class="fas fa-eye"></i> Aluno
                </button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Visualizar Sala">
                    <i class="fas fa-eye"></i> Sala
                </button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Visualizar Disciplina">
                    <i class="fas fa-eye"></i> Disciplina
                </button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Visualizar Professor">
                    <i class="fas fa-eye"></i> Professor
                </button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>