<?php

namespace App\DAO;

use App\Model\PokemonModel;
use \PDO;

class PokemonDAO
{
    private $conexao;

    function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=Pokedex";
        
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }
    function insert(PokemonModel $model) 
    {
        $sql = "INSERT INTO Pokemon 
                (nome, id_elementos, descricao, altura, peso, genero, id_elemento_fraqueza, evolucoes) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id_elementos);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->altura);
        $stmt->bindValue(5, $model->peso);
        $stmt->bindValue(6, $model->genero);
        $stmt->bindValue(7, $model->id_elemento_fraqueza);
        $stmt->bindValue(8, $model->evolucoes);
        

        $stmt->execute();      
    }
    public function select()
    {
        $sql = "SELECT * FROM Pokemon";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    public function update(PokemonModel $model)
    {
        $sql = "UPDATE Pokemon SET nome=?, id_elementos=?, descricao=?, 
        altura=?, peso=?, genero=?, id_elemento_fraqueza=?, evolucoes=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id_elementos);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->altura);
        $stmt->bindValue(5, $model->peso);
        $stmt->bindValue(6, $model->genero);
        $stmt->bindValue(7, $model->id_elemento_fraqueza);
        $stmt->bindValue(8, $model->evolucoes);
        $stmt->bindValue(9, $model->id);

        $stmt->execute();
    }
    public function selectById(int $id)
    {
        
        $sql = "SELECT * FROM Pokemon WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PokemonModel");
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM Pokemon WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}