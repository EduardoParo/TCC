<?php
     namespace app\controller;

     use mf\controller\Controller;
     use mf\model\ModelConnect;

    /*-------------------------------------------
    * 4° Classe IndexController
    *@author Eduardo Paro de Simoni
    -----------------------------------------*/
     class IndexController extends Controller{

        /*Carregar a pagina Index
        -------------------------------------*/
        public function index(){
            //Verificar se foi realizado o Longin
            $this->oView->login = isset($_GET['login']) ? $_GET['login'] : '';

            $this->req_Layout('index');
        }

        /*Carregar a pagina Cadastro
        -------------------------------------*/
        public function cadastrar(){
            //Definir propiedades dentro do arrary pois no Metodo validar faz comparações
            $this->oView->aUsuario = array(
                'nome'  => '',
                'email' => '',
                'senha' => '',
            );
            $this->oView->lErro = false;
            $this->req_Layout('cadastrar');
        }

         /*incluir Usuario Carregar o MODEL
        -------------------------------------*/
        public function incluirUsr(){
            //Abrir conexão com o banco de dados e carregar o Objeto USR
           $oUsr = modelConnect::getModel('usuario');

           $oUsr->__set('cNome'  ,$_POST['nome']);
	       $oUsr->__set('cEmail' ,$_POST['email']);
	       $oUsr->__set('cSenha' ,md5($_POST['senha']));
        
	    	if($oUsr->validarCadastro()){
            
	    	    if(count($oUsr->getUsrEmail()) == 0 ){
	    			$oUsr->salvarUsr();
	    			$this->req_Layout('cadastrar');
                }

	    		$this->oView->aUsuario = array(
	    			'nome'  => $_POST['nome']	,
	    			'email' => $_POST['email']	,
	    			'senha' => $_POST['senha']	,
                );

                $this->oView->lErro = true;
	    		$this->req_Layout('cadastrar');

            }
        }
    }







?>