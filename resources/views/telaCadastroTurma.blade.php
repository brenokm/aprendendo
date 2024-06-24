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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <form action="{{ route('criar.turma') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Cadastro de Turma</h2>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nometurma">nome:</label>
                            <input type="text" class="form-control" id="nometurma" name="nometurma"placeholder="Insira o nome da Turma">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="professor_id">Professor:</label>
                        <select class="form-control" id="professor_id" name="professor_id" required>
                            <option value="">Selecione um professor</option>
                            @foreach ($professores as $professor)
                                <option value="{{ $professor->professor_id }}">{{ $professor->professor_nome }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="curso_id">curso:</label>
                        <select class="form-control" id="curso_id" name="curso_id" required>
                            <option value="">Selecione um curso</option>
                            @foreach ($cursos as $curso)
                                <option value="{{ $curso->curso_id }}">{{ $curso->curso_nome }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="sala_id">sala:</label>
                        <select class="form-control" id="sala_id" name="sala_id" required>
                            <option value="">Selecione uma sala</option>
                            @foreach ($salas as $sala)
                                <option value="{{ $sala->sala_id }}">{{ $sala->sala_nome}}</option>
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
