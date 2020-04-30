<?php
// get, set, to string
class Pessoa{
    private $nome;
    private $idade;

    public function __set($name, $value)// o parâmetro name é o nome da variavel a ser setada e o value é o valor a ser passado para ela
    {
        // o set é chamado toda vez que tentamos colocar um valor em um atributo diretamnete
        $this->$name = $value;
    }
    public function __get($name){// o parametro name é o nome da variável a ser requisitada
        return $this->$name;
    }
    public function __toString()
    {
        // o to string é chamado quando você tenta imprimir um objeto
        return "toString<br>";
    }
    public function __invoke()
    {
        // o invoke é chamado quando tentamos imprimir um objeto como função
        return "invoke";
    }
}
$pessoa = new Pessoa();
$pessoa->nome = "aaa";
$pessoa->idade = 10;

echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa;
echo $pessoa();
?>