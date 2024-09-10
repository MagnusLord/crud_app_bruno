<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Disciplinas</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: auto;
            padding: 20px;
        }

        /* Estilos do cabeçalho */
        h1 {
            background-color: var(--cor-primaria);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: var(--cor-primaria);
            margin-top: 20px;
        }

        /* Estilos da lista */
        ul {
            list-style-type: none; /* Remove marcadores de lista */
            padding: 0;
            width: 100%;
            max-width: 600px; /* Limita a largura da lista */
            margin: 0 auto; /* Centraliza a lista */
        }

        li {
            background-color: white;
            margin: 10px 0;
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Estilos do link */
        a {
            margin-top: 20px;
            text-decoration: none;
            color: var(--cor-primaria);
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Lista de Disciplinas</h1>

    <h2>Detalhes das Disciplinas</h2>
    <ul>
        @foreach ($disciplinas as $disciplina)
            <li>
                Nome: {{ $disciplina['nome'] }}, Professor: {{ $disciplina['professor'] }}, Escola: {{ $disciplina['escola'] }}, Quantidade de Alunos: {{ $disciplina['qtd_alunos'] }}
            </li>
        @endforeach
    </ul>

    <h2>Nomes das Disciplinas</h2>
    <ul>
        @foreach ($nomesDisciplinas as $nome)
            <li>{{ $nome }}</li>
        @endforeach
    </ul>
    
    <a href="{{ route('disciplinas.create') }}">Cadastrar Disciplina</a>
</body>
</html>