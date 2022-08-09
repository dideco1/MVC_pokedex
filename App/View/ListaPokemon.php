<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    <title>Pokedex</title>
    <style>
    .botao{
        position:absolute;
        top: 0px;
        background-color: red;
    }
    </style>
</head>
<body>
    <center>
        <legend> Lista de Pessoas </legend>
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
                <td>&nbsp<?= $item['elemento_dominante'] ?>&nbsp</td>
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
        <button class="botao"> Voltar ao Registro </button>
    </a>
</body>
</html>