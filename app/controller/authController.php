<?php

namespace app\controller;

use app\Connection;
use mf\controller\Controller;
use mf\model\ModelConnect;

/*------------------------------------------- 
| Extensão da classe controller             |
----------------------------------------------*/
class AuthController extends Controller{

    /* Função Autenticar Usuario
    ---------------------------------*/
    public function autenticar(){
        
        // Realiza conexão com o banco e instacia o modelo de dados Usuario
        $oUsr = modelConnect::getModel('usuario');

        // Atribui os valores ao objeto Usuario
        $oUsr->__set('cEmail', $_POST['email']);
        $oUsr->__set('cSenha', md5($_POST['senha']));

        // Chamar o Metodo Autenticar
        $oUsr->Autenticar();

        if($oUsr->__get('nId') != null && $oUsr->__get('cNome') != null){
            // Iniciar Sessão 
            session_start();
            
            //Atribui Valores a Sessão
            $_SESSION['nId']   = $oUsr->__get('nId');
            $_SESSION['cNome'] = $oUsr->__get('cNome');

            // Realiza o POST no caminho HOME
            header('Location:  /home');

        }else{
   
            header('Location:/?login=erro');
        }
        
    }

    //Função Sair
    public function sair(){
        session_start();
        session_destroy();
        header('Location: /');

    }

}

?>
