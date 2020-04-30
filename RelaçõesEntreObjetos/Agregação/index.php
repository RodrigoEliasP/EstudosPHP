<?php
// agregação é quando uma classe precisa de outra para executar sua ação, ou seja, elea ultiliza a outra como parte d si
class Produtos{
    public $name;
    public $valor;

    function __construct($nome,$valor)
    {
        $this->name = $nome;
        $this->valor = $valor;
    }
}
class Carrinho{
    public $produtos;

    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }
    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->name.":".$produto->valor."<hr>";
        }
    }
}
$produto1 = new Produtos("Carro", 20000);
$produto2 = new Produtos("Notebook", 2000);
$produto3 = new Produtos("Celular", 1500);
$produto4 = new Produtos("Loli", 200000);
$produto5 = new Produtos("Mouse", 20);
$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->adiciona($produto4);
$carrinho->adiciona($produto5);
$carrinho->exibe();
?>