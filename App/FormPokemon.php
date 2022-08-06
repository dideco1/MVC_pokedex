<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro de Pokemons</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    label{
        width:230px;
        display: inline-block;
    }
    input{
        width:250px;
    }
    .botao{
        position:absolute;
        top: 0px;
        background-color: red;
    }

    </style>
</head>
<body>
    <center>
    <form action="/pokemon/save" method="post">
        <fieldset>
            
            <h1>Registro de Pokemon</h1>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <br>

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />
            <br>

            <label for="elemento_dominante">Principal elemento:</label>
            <input name="elemento_dominante" id="elemento_dominante" value="<?= $model->elemento_dominante ?>" type="text" />
            <br>

            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" value="<?= $model->descricao ?>" type="text" />
            <br>

            <label for="altura">Altura:</label>
            <input name="altura" id="altura" value="<?= $model->altura ?>" type="text" />
            <br>

            <label for="peso">Peso:</label>
            <input name="peso" id="peso" value="<?= $model->peso ?>" type="text" />
            <br>

            <label for="genero">Gênero:</label>
            <input name="genero" id="genero" value="<?= $model->genero ?>" type="text" />
            <br>

            <label for="fraqueza_principal">Principal Fraqueza:</label>
            <input name="fraqueza_principal" id="fraqueza_principal" value="<?= $model->fraqueza_principal ?>" type="text" />
            <br>

            <label for="evolucoes">Evoluções:</label>
            <input name="evolucoes" id="evolucoes" value="<?= $model->evolucoes ?>" type="text" />
            <br>
            <br>

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
    </center>
    <a href="/pokemon">
        <button class="botao"> Ver Lista </button>
    </a>
</body>
</html>