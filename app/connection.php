<?php
    namespace app;

    /* Classe Conection conexão com banco de dados
    ------------------------------------*/
    class Connection{

        //Metodo GET 
        public static function GetDb(){
            try{
                $oConn = new \PDO(
                    "mysql:host=localhost;dbname=tcc;charset=utf8",
                    "root",
                    ""
                );
                return $oConn;

            }catch(\PDOException $e){

            }
        }
    }



?>