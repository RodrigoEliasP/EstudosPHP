<?php
/*Herança é um recurso que permite que classes compartilhem métodos e atributos*/
class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "andou<hr>";
    }
    public function Parar(){
        echo "parou<hr>";
    }
}
class Carro extends Veiculo{
    /*
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){

    }
    public function Parar(){

    }*/
    public function ligarLimpador(){
        echo "<br>Limpando em 321";
    }
}
// a herança é declarada pelo extends <nome da classe mãe>
class Moto extends Veiculo{
    /*a classe moto executa as mesmo funções que o carro, quando temos classes que compartilham muitas propiedades 
    é legal criarmos outra classe genérica con todos os atributos envolvidos*/
    /*
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){

    }
    public function Parar(){

    }*/
    public function darGrau(){
        echo "<br>Dando grau";
    }
}
$carro = new Carro();
$carro->modelo = "gol";
$carro->cor = "verde";
$carro->ano = 1998;
var_dump($carro);
$carro->Parar();
$carro->ligarLimpador();
// ao colocar o extends na classe, a classe começa a possuir todos atributos da classe mãe
$moto = new Moto();
$moto->modelo = "x9";
$moto->cor = "preto";
$moto->ano = 2017;
var_dump($moto);
$moto->Andar();
$moto->darGrau();

?>