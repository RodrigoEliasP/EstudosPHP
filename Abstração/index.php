<?php
// classes abstratas não podem ser instanciadas e servem de modelo para classes herdeiras
abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    //métodos sem o abstract não são obrigatórios mas podem ser sobreescritos
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    // métodos declarados como abstratos devem estar nas classes herdeiras ou resultara m um erro
    abstract protected function Sacar($s);// os parâmetros devem estar iguais tambem
    abstract protected function Depositar($d);
}

class Itau extends Banco{
    public function Sacar($s){//se adicionarmos um parâmetro a mais em um metodo abstrato devemos coloca-lo na classe abstrata também
        $this->saldo -= $s;
        echo "<hr> sacou:" . $s;
    }
    public function Depositar($d){
        $this->saldo += $d;
        echo "<hr> depositou:" . $d;
    }
}
/*
class Bradesco extends Banco{
    public function Sacar(){
        echo "sacou";
    }
    public function Depositar(){
        echo "depositou";
    }
}*/

//$banco = new Banco(); classes abstratas não podem ser instanciadas
$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> saldo: ".$itau->getSaldo();
$itau->Depositar(900);
echo "<hr> saldo: ".$itau->getSaldo();
?>