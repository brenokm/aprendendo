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

    <form action="{{route('atualizar.sala')}}" method="POST">
        @csrf
        <input type="hidden" name="sala_id" value="{{ $salas->sala_id}}">
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
                    <h2>atualizar de Sala</h2>
                </div>
            </div>

            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="login">Nome:</label>
                            <input type="text" class="form-control" id="nomesala" name="nomesala" placeholder="Insira seu login" value="{{$salas->sala_nome}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
                    </div>
                </div>
            </form>
        </div>

    </form>
</body>

</html>
