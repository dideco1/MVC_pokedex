<?php

class PokemonDAO
{
    private $conexao;

    function __construct() 
    {
        $dsn = "mysql:host=localhost:3306;dbname=Pokedex";
        
        $this->conexao = new PDO($dsn, 'root', '1234');
    }
    function insert(PokemonModel $model) 
    {
        $sql = "INSERT INTO Pokemon 
                (nome, id_elementos, descricao, altura, peso, genero, id_elemento_fraqueza, evolucoes) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->elemento_dominante);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->altura);
        $stmt->bindValue(5, $model->peso);
        $stmt->bindValue(6, $model->genero);
        $stmt->bindValue(7, $model->fraqueza_principal);
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
        $sql = "UPDATE Pokemon SET nome=?, elemento_dominante=?, descricao=?, 
        altura=?, peso=?, genero=?, fraqueza_principal=?, evolucoes=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->elemento_dominante);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->altura);
        $stmt->bindValue(5, $model->peso);
        $stmt->bindValue(6, $model->genero);
        $stmt->bindValue(7, $model->fraqueza_principal);
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