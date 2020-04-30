<?php

class Animal{
    public function Andar(){
        echo "o animal Andou";
    }
    public function Correr(){
        echo "o animal Correu";
    }
}
class Cavalo extends Animal{
    // o polimorfismo vem da capacidade de sobreescrever os métodos de outras classes
    public function Andar()
    {
        $this->Correr();
    }
}
$animal = new Cavalo();
$animal->Andar();
?>