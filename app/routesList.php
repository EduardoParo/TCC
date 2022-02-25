<?php

namespace app;

use mf\Routes;
/*--------------------------------------
* 2° Classe Lista das Rotas
* @author Eduardo Paro de Simoni
---------------------------------------*/
class RoutesList extends Routes{
        
        //Função para definir o array de rotas
        protected function iniRoutes(){

            //1° Rota Index
            $aRoutes['index'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action'    =>  'index'
            );

            //2° Rota Cadastrar Usuario
            $aRoutes['cadastrar'] = array(
                'route' => '/cadastrar',
                'controller' => 'indexController',
                'action'    =>  'cadastrar'
            );

              //3° Rota Incluir Usuario no banco
              $aRoutes['incluirUsr'] = array(
                'route' => '/incluirUsr',
                'controller' => 'indexController',
                'action'    =>  'incluirUsr'
            );

            //4° Rota Autenticar
            $aRoutes['autenticar'] = array(
                'route' => '/autenticar',
                'controller' => 'authController',
                'action'    =>  'autenticar'
            );
            //5° Rota Home
            $aRoutes['home'] = array(
                'route' => '/home',
                'controller' => 'appController',
                'action'    =>  'home'
            );
            //6° Rota Sair
               $aRoutes['sair'] = array(
                'route' => '/sair',
                'controller' => 'authController',
                'action'    =>  'sair'
            );

            //7° Incluir Ideia
            $aRoutes['IncluirIdeia'] = array(
                'route' => '/incluirIdeia',
                'controller' => 'appController',
                'action'    =>  'incIdeia'
            );

            //8° Alterar Ideia
            $aRoutes['AltIdeia'] = array(
                'route' => '/viewIdeia',
                'controller' => 'appController',
                'action'    =>  'viewIdeia'
            );

            //9° Alterar Ideia
            $aRoutes['delIdeia'] = array(
                'route' => '/delIdeia',
                'controller' => 'appController',
                'action'    =>  'delIdeia'
            );

             //8° Alterar Ideia
            $aRoutes['lista'] = array(
                'route' => '/lista',
                'controller' => 'appController',
                'action'    =>  'lista'
            );

    

           
            $this->setRoutes($aRoutes);
    

        }
    }

?>