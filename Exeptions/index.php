<?php

class Newsletter{
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é inválido", 1);
        else:
            echo "cadastrado com sucesso";
        endif;
    }
}
$letter =  new Newsletter();
try{
$letter->cadastrarEmail("contato@");
}catch(Exception $e){
    echo "mensagem: ".$e->getMessage()."<br>";
    echo "código: ".$e->getCode()."<br>";
    echo "linha:". $e->getLine()."<br>";
    echo "arquivo:". $e->getFile()."<br>";
}
?>