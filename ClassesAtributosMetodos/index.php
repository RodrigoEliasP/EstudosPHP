<?php
// classes sempre declaradas com a primeira letra em maiúscula
class Pessoa {
    // atributos são como características
    public $nome;
    public $idade;

    //métodos são como as ações que a classe executará

    public function Falar(){
        //this é usado para se referir a uma variável no escopo da classe
        echo $this->nome." de ".$this->idade." acabou de falar";
    }
}

// instanciamento
$rodrigo = new Pessoa();
// para alterar o valor de algum atributo público no objeto é necessário usar uma seta "->" na intância da classe
// depois da seta é só colocar o nome do atributo e atribuit um valor
$rodrigo->nome = "Rodrigo Elias";
$rodrigo->idade = 25;
// para acessar um método é o mesmo esquema dos atributos
$rodrigo->Falar();
?>