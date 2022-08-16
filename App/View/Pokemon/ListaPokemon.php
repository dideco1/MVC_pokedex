<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    <title>Pokedex</title>
    <style>
    body{
        background-color: grey;
    }
    table{
        border-color: black;
        font-size: 16px;
    }
    th{
        color: blue;
        text-align: center;
    }
    td{
        text-align: center;
    }
    legend{
        font-size: 40px;
        color: darkblue;
    }
    .botao_cadastrar_pokemon{
        position:absolute;
        top: 0px;
        background-color: red;
    }
    .botao_cadastrar_elemento{
        position:absolute;
        top: 0px;
        left: 160px;
        background-color: red;
    }
    .botao_lista_elemento{
        position:absolute;
        top: 0px;
        left: 320px;
        background-color: red;
    }
    </style>
</head>
<body>
    <center>
        <legend> Lista de Pokemons </legend>
        <table border="2">
            <tr>
                <th>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Elemento Dominante</th>
                <th>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
            </tr>

            <?php foreach($model->rows as $item): ?>
            <tr>
                <td> <a href="/pokemon/delete?id=<?= $item['id'] ?>">X</a> </td>
                <td><?= $item['id'] ?></td>
                <td>&nbsp<a href="/pokemon/form?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a>&nbsp</td>
                <td>&nbsp<?= $item['id_elementos'] ?>&nbsp</td>
                <td><a href="/pokemon/detalhe?id=<?= $item['id'] ?>"> Ver Detalhes </a> &nbsp </td>

            </tr>
            <?php endforeach ?>

            
            <?php if(count($model->rows) == 0): ?>
                <tr>
                    <td colspan="10">Nenhum registro encontrado.</td>
                </tr>
            <?php endif ?>



        </table>
    </center>
    <a href="/">
        <button class="botao_cadastrar_pokemon"> Cadastrar Pokemon </button>
    </a>
    <a href="/elemento/cadastro">
        <button class="botao_cadastrar_elemento"> Cadastrar Elemento </button>
    </a>
    <a href="/elemento">
        <button class="botao_lista_elemento"> Ver Lista de Elemento </button>
    </a>
</body>
</html>