<?php
// Associação é quando um objeto usa o outro sem que eles dependam um do outro
class Pedido{
    public $numero;
    public $cliente;
}
class Cliente{
    public $nome;
    public $endereco;
}
$cliente = new Cliente();
$cliente->nome = "Rodrigo Elias";
$cliente->endereco = "Rua xxx , Número: 177";

$pedido = new Pedido();
$pedido->numero = "123";
// isso é apenas uma referência, se algum atributo for alterado dentro de pedido->cliente sera alterado na classe Cliente também
$pedido->cliente = $cliente;

$dados = array(

    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco

);
var_dump($dados);
?>