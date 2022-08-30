<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro de Pokemons</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body{
        background-color: grey;
    }
    h1{
        color: darkblue;
    }
    label{
        width:230px;
        font-size: 18px;
        display: inline-block;
        color: blue;
    }
    input{
        width:250px;
    }
    .botao_lista_pokemon{
        position:absolute;
        top: 0px;
        background-color: red;
    }
    .botao_cadastrar_elemento{
        position:absolute;
        top: 0px;
        left: 180px;
        background-color: red;
    }
    .botao_lista_elemento{
        position:absolute;
        top: 0px;
        left: 347px;
        background-color: red;
    }

    </style>
</head>
<body>
    <center>
    <?php if(count($model_elemento->rows) == 0): ?>
        <br>
        <h1> Não é possível registrar um pokémon sem ao menos um elemento cadastrado </h1>
    <?php else: ?>
    <form action="/pokemon/save" method="post">
        <fieldset>
            
            <h1>Registro de Pokemon</h1>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <br>

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />
            <br>

            <label for="id_elementos">Id elemento(s):</label>
            <input name="id_elementos" id="id_elementos" value="<?= $model->id_elementos ?>" type="text" />
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

            <label for="id_elemento_fraqueza">Id da Fraqueza (elemento):</label>
            <input name="id_elemento_fraqueza" id="id_elemento_fraqueza" value="<?= $model->id_elemento_fraqueza ?>" type="text" />
            <br>

            <label for="evolucoes">Evoluções:</label>
            <input name="evolucoes" id="evolucoes" value="<?= $model->evolucoes ?>" type="text" />
            <br>
            <br>

            <button type="submit">Enviar</button>

        </fieldset>
    </form>   
    <?php endif ?> 
    </center>
    <a href="/pokemon">
        <button class="botao_lista_pokemon"> Ver Lista de Pokemon </button>
    </a>
    <a href="/elemento/cadastro">
        <button class="botao_cadastrar_elemento"> Cadastrar Elemento </button>
    </a>
    <a href="/elemento">
        <button class="botao_lista_elemento"> Ver Lista de Elemento </button>
    </a>
</body>
</html>