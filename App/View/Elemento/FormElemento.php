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
    .botao_lista_pokemon{
        position:absolute;
        top: 0px;
        background-color: red;
    }
    .botao_cadastrar_pokemon{
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
    <form action="/elemento/save" method="post">
        <fieldset>
            
            <h1>Registro de Elemento</h1>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <br>

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />
            <br>
            <br>

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
    </center>
    <a href="/pokemon">
        <button class="botao_lista_pokemon"> Ver Lista de Pokemon </button>
    </a>
    <a href="/">
        <button class="botao_cadastrar_pokemon"> Cadastrar Pokemon </button>
    </a>
    <a href="/elemento/lista">
        <button class="botao_lista_elemento"> Ver Lista de Elemento </button>
    </a>
</body>
</html>