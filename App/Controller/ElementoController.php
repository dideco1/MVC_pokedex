<?php
include 'Model/ElementoModel.php';

class ElementoController
{
    public static function index()
    {
        $model = new ElementoModel();
        $model->getAllRows();

        include 'View/Elemento/ListaElemento.php';
    }
    public static function form()
    {
        
        $model = new ElementoModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }
        
        include 'View/Elemento/FormElemento.php';
    }
    public static function save() {
        $elemento = new ElementoModel();
        $elemento->id = $_POST['id'];
        $elemento->nome = $_POST['nome'];

        $elemento->save();

        header("Location: /elemento");
    }
    public static function delete()
    {

        $model = new ElementoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /elemento");
    }

}