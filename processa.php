<?php

require "database.php";

if(isset($_POST['q19_cpf']) and !empty($_POST['q19_cpf'])) {
$q19_cpf = $_POST['q19_cpf'];
    $ObjVerifica = verifica_existe($q19_cpf);
if($ObjVerifica ==TRUE) {
    echo "CPF ja cadastrado !";

}else

    echo "Cadastro realizado com sucesso !";

    } else {

      
         echo "Ops cpf nao pode ser cadastrado!";

}