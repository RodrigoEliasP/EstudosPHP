<?php

class Login {

    private $email;
    private $senha;
    //por questão de segurança atributos devem ser privados, por isso usa-se métodos get/set para passar valores para eles 
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        // com os set podemos tratar os dados na classe antes de jogar dentro dos atributos
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "logado com sucesso";
        else:
            echo "Login falhou";
        endif;
    }
}
$logar = new Login();
$logar->setEmail("teste/@teste.com");
$logar->setSenha("123456");
$logar->Logar();
?>