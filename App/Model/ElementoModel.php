<?php
namespace App\Model;

include 'DAO/ElementoDAO.php';

use App\DAO\ElementoDAO;

class ElementoModel
{
    public $id, $nome, $rows;

    public function save()
    {

        $dao = new ElementoDAO();


        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }
    public function getAllRows()
    {
        
        $dao = new ElementoDAO();
        
        $this->rows = $dao->select();
    }
    public function getById(int $id)
    {

        $dao = new ElementoDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new ElementoModel();
    }
    public function delete(int $id)
    {

        $dao = new ElementoDAO();

        $dao->delete($id);
    }
}