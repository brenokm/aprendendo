{{-- <!DOCTYPE html>
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

    <table class="table-auto w-full border-collapse mt-4">

        <table class="table-auto w-full border-collapse">
            <thead>

                <th class="px-4 py-2 text-left">Nome</th>
                <th>Ação</th>


            </thead>
            <tbody>
                @foreach ( $cursos as $curso)

                <tr class="border-b hover:bg-teal-100">

                    <td class="text-left px-4 py-2">{{ $curso->curso_nome}}</td>
                    <td class="flex">
                        <a href="{{ route('editar.curso', ['curso_id' => $curso->curso_id]) }}" class="">Atualizar</a>

                        <form id="delete-form-{{$curso->curso_id}}" action="{{ route('deletar.curso', ['curso_id' => $curso->curso_id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-block" onclick="confirmDeleteFuncionario(event, {{$curso->curso_id}})">Deletar</button>
                        </form>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

</body>
</html> --}}




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Cursos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Custom styles */
        .table-auto {
            width: 100%;
            border-collapse: collapse;
        }
        .table-auto th, .table-auto td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        .border-b {
            border-bottom: 1px solid #ddd;
        }
        .hover\:bg-teal-100:hover {
            background-color: #d1f2eb;
        }
        .flex {
            display: flex;
            gap: 10px;
        }
        .btn-block {
            display: inline-block;
            width: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <p class="navbar-brand" href="#">Nome do Usuário</p>
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

    <div class="container mt-4">
        <h1 class="mb-4">Lista de Cursos</h1>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th class="px-4 py-2 text-left">Nome do Curso</th>
                    <th class="px-4 py-2 text-left">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                <tr class="border-b hover:bg-teal-100">
                    <td class="text-left px-4 py-2">{{ $curso->curso_nome }}</td>
                    <td class="flex">
                        <a href="{{ route('editar.curso', ['curso_id' => $curso->curso_id]) }}" class="btn btn-primary btn-block">Atualizar</a>
                        <form id="delete-form-{{$curso->curso_id}}" action="{{ route('deletar.curso', ['curso_id' => $curso->curso_id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-block" onclick="return confirmDelete(event, {{$curso->curso_id}})">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // Função de confirmação para deletar um curso
        function confirmDelete(event, cursoId) {
            // Exibe a caixa de diálogo de confirmação
            if (!confirm('Tem certeza que deseja deletar este curso? Esta ação não pode ser desfeita!')) {
                event.preventDefault(); // Impede o envio do formulário
                return false; // Retorna falso para cancelar o evento de clique
            }
            return true; // Retorna verdadeiro para permitir o envio do formulário
        }
    </script>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

