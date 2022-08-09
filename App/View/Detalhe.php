<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Detalhes <?php echo"$nome" ?> </title>
    <style>
        fieldset
        {
            border-radius:10%;
            text-align: center;
            width:500px;
        }
        .botao{
        background-color: red;
    }
    </style>
</head>
<body>
    <center>
        <fieldset>
            <label> <b>Nome:</b> <?php echo"$nome" ?></label> <br> <br>
            <label> <b>Principal Elemento:</b> <?php echo"$elemento" ?> </label> <br> <br>
            <label> <b>Altura:</b> <?php echo"$altura" ?></label> <br> <br>
            <label> <b>Peso:</b> <?php echo"$peso" ?> </label> <br> <br>
            <label> <b>Gênero:</b> <?php echo"$genero" ?> </label> <br> <br>
            <label> <b>Principal Fraqueza:</b> <?php echo"$fraqueza" ?> </label> <br> <br>
            <label> <b>Evoluções:</b> <?php echo"$evolucoes" ?> </label> <br> <br>
            <label> <b> Descrição: </b> <br>
            <label> <?php echo"$descricao" ?> </label> <br> <br>
        </fieldset>
        <br>
        <a href="/pokemon">
            <button class="botao">Ver Lista</button>
        </a>
        &nbsp &nbsp &nbsp &nbsp
        <a href="/">
            <button class="botao"> Voltar ao Registro </button>
        </a>
    </center>
    
</body>
</html>