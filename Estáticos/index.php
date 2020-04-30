<?php

class Login {
    //métodos e atributos estáticos podem ser usados sem a instância da classe
    public static $user;
    
    public static function verificaLogin(){
        // os atributos estáticos podem ser acessados dntro da mesma classe com o self, o this não funcionará
        echo "<br> o ". self::$user ." está logado";
    }
    public function Deslogar(){
         echo "<br> deslogou";
    }
}


// para acessar as propiedades estáticas é só colocar o nome da classe e o nome da propriedade separados por "::"
Login::$user = "Admin";
Login::verificaLogin();
// o fato de que eles podem ser acessados sem a instância não diz que eles não podem ser acessados por ela
$log = new Login();
$log->verificaLogin();
// também não impede de termos métodos ou atributos normais na classe
$log->Deslogar();
?>