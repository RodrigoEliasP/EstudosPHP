<?php
// uma interface é usada como modelo de métodos para classes (não aceitam atributos)
interface Crud{

    public function Create();
    public function Read();
    public function Update();
    public function Delete();
}

class Noticia implements Crud{
    // caso os métodos da interfaces não sejam declarados dentro da classe resultará em um erro
    public function Create(){

    }
    public function Read(){

    }
    public function Update(){

    }
    public function Delete(){

    }
}
?>