<?php

class Pessoa{
    public $idade;

    public function __clone()
    {
        // o método pre-definido __clone é ativado quando a clonagem de objetos é usada
        echo "clonagem bem sucedida ";
    }
}
$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = $pessoa;
$pessoa2->idade = 35;
// o output será 35, o pesoa2 não é uma nova inatância do pessoa, apenas faz referência, ou seja, se alterarmos algo em pessoa2 pessoa será alterado tambem
echo "pessoa: $pessoa->idade <br>";
// a palavra clone cria uma nova instância da classe na variável declarada
$pessoa3 = clone $pessoa;
echo "pessoa clonada: $pessoa->idade <br>";
$pessoa3->idade = 20;
echo "pessoa3: $pessoa3->idade <br>";
?>