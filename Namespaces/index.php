<?php
require 'classes/produto.php';
require 'models/produto.php';
// os namespaces são usados para evitar atrito entre classes com mesmo nome são como um nível de separação
$produto = new \models\Produto();
$produto->mostrarDetalhes();
//podem chamar arquivos dessa maneira ou com o use
use \classes\Produto;
$produto = new Produto();
$produto->mostrarDetalhes();
// tambem dá para definir um apelido para as classes usando um as depois do use
use \models\Produto as modelProduct;
$produto = new modelProduct();
$produto->mostrarDetalhes();
?>