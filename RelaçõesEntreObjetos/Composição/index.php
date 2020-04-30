<?php
// composição é quando uma classe cria a inatância de outra classe dentro de si, assim quando u8ma classe for destruida ela tambem será

class Pessoa{
    public function atribuiNome($nome){
        return "o nome da pessoa é ". $nome;
    }
}
class Exibe{
    // variável onde fica a instância da classe Pessoa
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        //instânciamento da classe pessoa dentro do objeto exibe
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}
$exibe = new Exibe("José");
$exibe->exibeNome();
?>