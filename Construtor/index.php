<?php 

class Login {

    private $email;
    private $senha;
    private $nome;

    // construtor é declarado com __construct, ele serve para pegar parâmetros ao instanciar a classe
    public function __construct($email, $senha, $nome)
    {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        
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
// os valores dos construtores são obtidos pelos parametros da instância
$logar = new Login("teste/@teste.com", "123456", "Rodrigo Elias");
$logar->Logar();
?>