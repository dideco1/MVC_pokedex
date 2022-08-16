<?php
include 'Model/PokemonModel.php';

class PokemonController
{
    public static function index()
    {
        $model = new PokemonModel();
        $model->getAllRows();

        include 'View/Pokemon/ListaPokemon.php';
    }
    public static function form()
    {
        
        $model = new PokemonModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }
        
        include 'View/Pokemon/FormPokemon.php';
    }
    public static function save() {
        $pokemon = new PokemonModel();
        $pokemon->id = $_POST['id'];
        $pokemon->nome = $_POST['nome'];
        $pokemon->id_elementos = $_POST['id_elementos'];
        $pokemon->descricao = $_POST['descricao'];
        $pokemon->altura = $_POST['altura'];
        $pokemon->peso = $_POST['peso'];
        $pokemon->genero = $_POST['genero'];
        $pokemon->fraqueza = $_POST['fraqueza'];
        $pokemon->evolucoes = $_POST['evolucoes'];

        $pokemon->save();

        header("Location: /pokemon");
    }
    public static function delete()
    {

        $model = new PokemonModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /pokemon");
    }
    public static function detalhe()
    {
        $model = new PokemonModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }
        $id = $model->id;
        $nome = $model->nome;
        $elemento = $model->id_elementos;
        $descricao = $model->descricao;
        $altura = $model->altura;
        $peso = $model->peso;
        $genero = $model->genero;
        $fraqueza = $model->id_elemento_fraqueza;
        $evolucoes = $model->evolucoes;

        include 'View/Pokemon/Detalhe.php';
    }

}