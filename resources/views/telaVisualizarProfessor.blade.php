<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de funcionarios</title>
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
        <h1 class="mb-4">Lista de Funcionarios</h1>
        <table class="table table-bordered table-auto">
            <thead class="thead-light">
                <tr>
                    <th class="px-4 py-2 text-left">Nome</th>
                    <th class="px-4 py-2 text-left">Disciplina</th>
                    <th class="px-4 py-2 text-left">Login</th>
                    <th class="px-4 py-2 text-left">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                @foreach ($professores as $professor)
                <tr class="border-b hover:bg-teal-100">
                    @if ($usuario->usuario_id == $professor->usuario_id)
                    <td class="text-left px-4 py-2">{{ $professor->professor_nome }}</td>
                    <td class="text-left px-4 py-2">{{ $professor->disciplina_id }}</td>
                    <td class="text-left px-4 py-2">{{ $usuario->usuario_nome }}</td>
                    <td class="flex">
                        <a href="{{ route('editar.professor', ['professor_id' => $professor->professor_id]) }}" class="btn btn-primary btn-block">Atualizar</a>
                        <form id="delete-form-{{$professor->professor_id}}" action="{{ route('deletar.professor', ['professor_id' => $professor->professor_id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-block" onclick="return confirmDelete(event, {{$professor->professor_id}})">Deletar</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(event, professorId) {
            if (!confirm('Tem certeza que deseja deletar este professor? Esta ação não pode ser desfeita!')) {
                event.preventDefault(); 
                return false; 
            }
            return true; 
        }
    </script>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

