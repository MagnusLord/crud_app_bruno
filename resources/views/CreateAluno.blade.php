<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
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
            height: 100vh;
        }

        /* Estilos do cabeçalho */
        h1 {
            background-color: var(--cor-primaria);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Estilos do formulário */
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        button {
            background-color: var(--cor-primaria);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #5b0a9a; /* Tom mais escuro para hover */
        }

        /* Estilos de mensagem de sucesso */
        p {
            color: green;
            font-weight: bold;
        }

        /* Link de voltar */
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: var(--cor-primaria);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Cadastrar Novo Aluno</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required min="1">
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>
        
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        
        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        
        <button type="submit">Cadastrar</button>
    </form>

    <a href="{{ route('alunos.index') }}">Voltar para a lista de alunos</a>
</body>
</html>