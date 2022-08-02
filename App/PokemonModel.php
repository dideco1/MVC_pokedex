<?php
include 'PokemonDAO.php';

class PokemonModel
{
    public $id, $nome, $elemento_dominante, $descricao, $altura;
    public $peso, $genero, $fraqueza_principal, $evolucoes, $rows;

    public function save()
    {

        $dao = new PokemonDAO();


        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }
    public function getAllRows()
    {
        
        $dao = new PokemonDAO();
        
        $this->rows = $dao->select();
    }
    public function getById(int $id)
    {

        $dao = new PokemonDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokemonModel();
    }
    public function delete(int $id)
    {

        $dao = new PokemonDAO();

        $dao->delete($id);
    }
}