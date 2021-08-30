<?php

function pdo() 
{
    $db = new \PDO('mysql:host127.0.0.1;dbname=bancocurriculos;charset=utf8', 'root', '',
array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
return $db;

}

function inserir($q19_cpf)
{
    
  $stmt = pdo()->prepare("INSERT INTO usuarios (text) VALUES (:q19_cpf)");
  $stmt->bindValue(":q19_cpf", $q19_cpf);
  $stmt->execute();
  if ($stmt->rowCount ()) {
      return TRUE;
  } else {
      return false;
    }
}    
function verifica_existe($q19_cpf)
{
  $stmt = pdo()->prepare("SELECT * FROM usuarios WHERE text=:");
  $stmt->bindValue(":q19_cpf",$q19_cpf);
  $stmt->execute();
  if ($stmt->rowCount() ) {
      return true;
  } else {
         return false;
    }
}