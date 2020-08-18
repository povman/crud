<?php


class CRUD extends Connect
{
    private $query;

    private function prepExec($prep, $exec){
        $this->query = $this->getConnect()->prepare($prep);
        $this->query->execute($exec);
    }
    
    public function insert($tabela, $campos, $exec){
        $this::prepExec("INSERT INTO " . $tabela . " SET " . $campos,$exec);
        return $this->getConnect()->lastInsertId();
    }

    public function select($campos, $tabela, $cond, $exec){
        $this::prepExec("SELECT ".$campos." FROM ". $tabela. " " . $cond ,$exec);
        return $this->query;
    }

    public function update($tabela, $campos, $exec){
        $this::prepExec("UPDATE " . $tabela . " SET " . $campos,$exec);
        return $this->query;
    }

    public function delete($tabela, $cond, $exec){
        $this::prepExec("DELETE FROM " . $tabela . " ". $cond,$exec);
    }

    public function query($instrucao){
        return $this->getConnect()->query($instrucao);
    }

}
