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

    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Cadastro</h2>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group btn-group-lg justify-content-center">
                    <a href="{{route('cadastro.turma')}}" class="btn btn-primary" title="Cadastro de Turma">
                        <i class="fas fa-users"></i> Cadastar Turma
                    </a>
                    <a href="{{route('cadastro.atividade')}}" class="btn btn-primary" title="Cadastro de Atividade">
                        <i class="fas fa-clipboard-list"></i>Cadastar Atividade
                    </a>
                    <a href="{{route('cadastro.aluno')}}" class="btn btn-primary" title="Cadastro de Aluno">
                        <i class="fas fa-user-graduate"></i>Cadastar Aluno
                    </a>
                    <a href="{{route('cadastro.curso')}}" class="btn btn-primary" title="Cadastro de Aluno">
                        <i class="fas fa-user-graduate"></i>Cadastar Cursos
                    </a>
                    <a href="{{route('cadastro.sala')}}" class="btn btn-primary" title="Cadastro de Sala">
                        <i class="fas fa-door-open"></i>Cadastar Sala
                    </a>
                    <a href="{{route('cadastro.disciplina')}}" class="btn btn-primary" title="Cadastro de Disciplina">
                        <i class="fas fa-door-open"></i>Cadastar Disciplina
                    </a>
                    <a href="{{route('cadastro.professor')}}" class="btn btn-primary" title="Cadastro de Professor">
                        <i class="fas fa-door-open"></i>Cadastar Funcionario
                    </a>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group btn-group-lg justify-content-center">
                    <a href="{{route('visualizar.turma')}}" class="btn btn-secondary" title="Visualizar Turma">
                        <i class="fas fa-eye"></i> Turma
                    </a>
                    <a href="{{route('visualizar.atividade')}}" class="btn btn-secondary" title="Visualizar Atividade">
                        <i class="fas fa-eye"></i> Atividade
                    </a>
                    <a href="{{route('visualizar.aluno')}}" class="btn btn-secondary" title="Visualizar Aluno">
                        <i class="fas fa-eye"></i> Aluno
                    </a>
                    <a href="{{route('visualizar.curso')}}" class="btn btn-secondary" title="Visualizar Curso">
                        <i class="fas fa-eye"></i> Curso
                    </a>
                    <a href="{{route('visualizar.sala' )}}" class="btn btn-secondary" title="Visualizar Sala">
                        <i class="fas fa-eye"></i> Sala
                    </a>
                    <a href="{{route('visualizar.disciplina')}}" class="btn btn-secondary" title="Visualizar Disciplina">
                        <i class="fas fa-eye"></i> Disciplina
                    </a>
                    <a href="{{route('visualizar.professor')}}" class="btn btn-secondary" title="Visualizar Professor">
                        <i class="fas fa-eye"></i> Funcionario
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
