<?php

namespace mf\controller;
/*-------------------------------------------
* 3° Classe Controler
*@author Eduardo Paro de Simoni
-----------------------------------------*/
abstract class Controller{
    protected $oView;

    //Metodo Construtor
    public function __contructor(){
        $this->oView = new \stdClass();
    }

    //Metodo Executar Layout
    protected function req_Layout($cView, $cLayout = 'layout'){
        $this->oView->cPage = $cView;
        //getcwd()
        if(file_exists("../app/view/" . $cLayout . ".php")){
            require_once "../app/view/" . $cLayout . ".php";
        }else{
            $this->req_View();
        }

    }

    //Metodo Execuat View
    //Chama a view dentro do layout
	protected function req_View() {
		$oClassAtual = get_class($this);

		$oClassAtual = str_replace('app\\controller\\', '', $oClassAtual);

		$oClassAtual = strtolower(str_replace('Controller', '', $oClassAtual));

		require_once "../app/view/".$oClassAtual."/".$this->oView->cPage.".php";
	}
}