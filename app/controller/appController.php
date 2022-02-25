<?php 

//Definir namespace
namespace app\controller;
//Executar a classe do arquivo

use mf\controller\Controller;
use mf\model\ModelConnect ;

/*----------------------------------
    Extenção da classe Controller
-------------------------------------*/
class AppController extends Controller{
   
    /*Função Validar autenticação
    -------------------------------------*/
    public function validaAutenticacao(){     
        //Iniciar seção PHP
        session_start();

        if(!isset($_SESSION['nId']) || $_SESSION['nId'] == '' || !isset($_SESSION['nId']) || $_SESSION['nId'] == ''){
            //Define o caminho ?login=erro
            header('Location: /?login=erro');
        }else{
            return true;
        }
    }

       /*Metodo Post ROTA Home
    ------------------------*/
    public function home(){ 
        //Validar usuario
        $this->validaAutenticacao();
        
        $this->oView->aUsuario = array(
            'nome'  => $_SESSION['cNome']
        );

        $oIdeia = modelConnect::getModel('ideia');

        $oIdeia->__set('nId_Usr',$_SESSION['nId'] );
        //Transformar array em json para encaminhar para o JS
        $aDados = $oIdeia->getAll();// json_encode($oIdeia->getAll());
        
        //Encaminhar os dados para a View é necessario utilizar o echo na pagina para imprimir o codigo JS
        $this->oView->aDados = $aDados;

       //Chamar a pagina Home
       $this->req_Layout('home','layout2');
        
    }

    /*Registrar dados no banco de dados 
    ----------------------------------------------------*/
    public function incIdeia(){
        
        $this->validaAutenticacao();
        $oIdeia = modelConnect::getModel('ideia');
        //Verificar se é Atualização
        if(isset($_REQUEST["nId"])){
            $oIdeia->__set('nId'           ,$_REQUEST['nId']);
            $oIdeia->__set('dData'         ,$_REQUEST['dData'      ]);
            $oIdeia->__set('cTitulo'       ,$_REQUEST['cTitulo'    ]);
            $oIdeia->__set('cAssunto'      ,$_REQUEST['cAssunto'   ]);
            $oIdeia->__set('cDescricao'    ,$_REQUEST['cDescricao'       ]);
            

            $oIdeia->update();
        }else{
           
            $oIdeia->__set('nId_Usr'      ,$_SESSION['nId']);
            $oIdeia->__set('dData'        ,$_REQUEST['dData'      ]);
            $oIdeia->__set('cTitulo'      ,$_REQUEST['cTitulo'    ]);
            $oIdeia->__set('cAssunto'     ,$_REQUEST['cAssunto'   ]);
            $oIdeia->__set('cDescricao'   ,$_REQUEST['cDescricao'       ]);

            $oIdeia->insert();
        }

        header('Location: /home');
    }

    /*Alterar Despesa // ROTA 
    ----------------------------------------*/
    public function viewIdeia(){
        $this->validaAutenticacao();

        $oIdeia = modelConnect::getModel('ideia');
           
        //Pegar o valor da rquisição Ajax
        $oIdeia->__set('nId', $_REQUEST["nId"]);

        //Transformar array em json para encaminhar para o JS
        $aDados = json_encode($oIdeia->getIdeia());

        //Retornar Json para o Js
        echo $aDados;
                                
    }

    /*Excluir 
      --------------------------------------------*/
    public function delIdeia(){
        $this->validaAutenticacao();

        $oIdeia = modelConnect::getModel('ideia');
        
        //Pegar o valor da rquisição Ajax
        $oIdeia->__set('nId', $_REQUEST["nId"]);

        //Transformar array em json para encaminhar para o JS
        $aDados = json_encode($oIdeia->delete());

        //Retornar Json para o Js
        echo $aDados;
                                
    }

    /*Metodo Post ROTA lista
    ------------------------*/
    public function lista(){ 
        //Validar usuario
        $this->validaAutenticacao();
        
        $this->oView->aUsuario = array(
            'nome'  => $_SESSION['cNome']
        );

        $oIdeia = modelConnect::getModel('ideia');
        $oIdeia->__set('nId_Usr',$_SESSION['nId'] );
        //Transformar array em json para encaminhar para o JS
        $aDados = json_encode($oIdeia->getAll());
        
        //Encaminhar os dados para a View é necessario utilizar o echo na pagina para imprimir o codigo JS
        $this->oView->aDados = '<script>
                                    let aLista = Array()
                                    aLista='.$aDados.'
                                 </script>';
       //Chamar a pagina Home
       $this->req_Layout('lista','layout2');
        
    }
    
}


?>    

    