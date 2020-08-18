<?php
class User {

private $table = "users" ;

private $id,$name,$phone;

private $pdo ;

private $logado = false;

public function __construct(){

$this->pdo = new CRUD;

}

// inserir

public function inserir($id,$name,$phone){

$this->id = $this->pdo->insert($this->table,"id=?,name=?,phone=?",array($id,$name,$phone));

$this->logado = true;

}

// função atualizar
public function atualizar($id,$name,$phone){

$this->id = $this->pdo->update($this->table,"id=?,name=?,phone=? where id=? ",array($id,$name,$phone));

$this->logado = true;

}

// função apagar
public function apagar($id){

$this->id = $this->pdo->delete($this->table," where id=? ",array($id));

$this->logado = true;

}

//função usuario
public function usuario($id){

$user = $this->pdo->select('*',$this->table,"where id=?",array($id));

$user = $user->fetchAll();

foreach ($user as $values){

$this->id = $values['id'];
$this->name = $values['name'];
$this->phone = $values['phone'];
}

$this->logado = (count ($user) >0);

}


public function isLogado(){

return $this->logado;
}
public function getId(){
return $this->id;
}
public function getName(){
return $this->name;
}
public function getPhone(){
return $this->phone;
}
}
