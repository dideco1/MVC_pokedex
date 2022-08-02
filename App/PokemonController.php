<?php
include 'PokemonModel.php';

class PokemonController
{
    public static function index()
    {
        $model = new PokemonModel();
        $model->getAllRows();

        include 'ListaPokemon.php';
    }
    public static function form()
    {
        
        $model = new PokemonModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }
        
        include 'FormPokemon.php';
    }
    public static function save() {
        $pokemon = new PokemonModel();
        $pokemon->id = $_POST['id'];
        $pokemon->nome = $_POST['nome'];
        $pokemon->elemento_dominante = $_POST['elemento_dominante'];
        $pokemon->descricao = $_POST['descricao'];
        $pokemon->altura = $_POST['altura'];
        $pokemon->peso = $_POST['peso'];
        $pokemon->genero = $_POST['genero'];
        $pokemon->fraqueza_principal = $_POST['fraqueza_principal'];
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

}