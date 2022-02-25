<?php

namespace mf;

/*----------------------------------------------------
* 1° - Classe Routes
* @author Eduardo Paro de Simoni
------------------------------------------------------*/
abstract class Routes {
    private $aRoutes;
    abstract protected function iniRoutes();

    //Construtor
    public function __construct(){
        $this->iniRoutes(); //Inicializa array de rotas 
        $this->exController($this->getUrl()); //Captura a URL e realiza requisição
    }

    //Metodo GET Routes
    public function setRoutes($xValor){
       $this->aRoutes = $xValor;
       return;
    }

    //Metodo GET Routes
    public function getRoutes(){
    return $this->aRoutes;
    }

    //Metodo GET URL
    protected function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    //Metodo POST executar controller
    protected function exController( $cUrl){
        foreach($this->getRoutes() as $key=>$aRoutes){
            if($cUrl == $aRoutes['route']){
                $cClass = "app\\controller\\". $aRoutes['controller'];
                $oControler = new $cClass;
                $cAction = $aRoutes['action'];
                $oControler->$cAction();
            }
        }

    }

}
