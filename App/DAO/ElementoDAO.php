<?php

namespace App\DAO;

use App\Model\ElementoModel;
use \PDO;

class ElementoDAO
{
    private $conexao;

    function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=Pokedex";
        
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }
    function insert(ElementoModel $model) 
    {
        $sql = "INSERT INTO Elementos 
                (nome) 
                VALUES (?)";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->execute();      
    }
    public function select()
    {
        $sql = "SELECT * FROM Elementos";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    public function update(ElementoModel $model)
    {
        $sql = "UPDATE Elementos SET nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);

        $stmt->execute();
    }
    public function selectById(int $id)
    {
        
        $sql = "SELECT * FROM Elementos WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM Elementos WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}