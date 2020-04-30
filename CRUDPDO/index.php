<?php
require_once('vendor/autoload.php');


$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome("Sua Tia");
$produto->setDescricao("De graça para mim");

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete($produto->getId());
$produtoDao->read();

foreach($produtoDao->read() as $produto):
    echo $produto['nome']. ":".$produto['descricao']."<hr>";
endforeach;
?>