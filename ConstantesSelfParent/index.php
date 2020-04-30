<?php
class Pessoa{
    const nome = "Rodrigo";

    public function exibirNome(){
        echo self::nome;
        // self é usado para obter valores de constantes da mesma classe
    }
}
class Rodrigo extends Pessoa{
    const nome = "Elias";
    
    public function exibirNome(){
    echo parent::nome;
    //parent é usado para obter valor de constantes de classes mãe
    }
}
$elias = new Rodrigo();
$elias->exibirNome();

?>