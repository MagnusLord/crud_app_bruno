<!-- resources/views/ListaAlunos.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <style>
        /* Cores roxas */
        :root {
            --cor-primaria: #6a0dad; /* Roxo escuro */
            --cor-secundaria: #9370db; /* Roxo claro */
            --cor-terciaria: #d8bfd8; /* Roxo pálido */
        }

        /* Estilos gerais */
        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--cor-terciaria);
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Estilos do cabeçalho */
        header {
            background-color: var(--cor-primaria);
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        /* Estilos da tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: var(--cor-primaria);
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lista de Alunos</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->idade }}</td>
                    <td>{{ $aluno->sexo }}</td>
                    <td>{{ $aluno->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>