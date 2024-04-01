<?php

namespace app\model;

use mf\model\model;

/*-----------------------------------
Extensão da classe model
------------------------------------*/
class Ideia extends model{
    //Definir Propriedades do Objeto
    private $nId       ;
    private $nId_Usr        ;
    private $dData          ;
    private $cTitulo        ;
    private $cAssunto        ;
    private $cDescricao           ;

   
    /*Metodo GET Retornar os atributos do OBJ
    ------------------------------------------*/
    public function __get($xAtributo){
        return $this->$xAtributo;
    }

    /*Metodo PUT seta os valores dos atributos
    --------------------------------------------*/
    public function __set($xAtributo,$xValor){
        $this->$xAtributo = $xValor;
    }

     /*Metodo GET retornar todos dados 
    --------------------------------------------*/
    public function getAll(){
        //Montagem da query
        $cQuery = " SELECT ";
        $cQuery.= " * FROM ideia WHERE ideia_id_usr = :nId_Usr";
        $cQuery.= " ORDER BY";
        $cQuery.= " data DESC";

        $oQuery = $this->oDb->prepare($cQuery);
        $oQuery->bindValue(':nId_Usr'        , intval($this->__get('nId_Usr')));
        
        $oQuery->execute();

        return $oQuery->fetchAll(\PDO::FETCH_ASSOC);
    }

    /*Metodo GET retornar um dado
    --------------------------------------------*/
    public function getIdeia(){
        //Montagem da query
        $cQuery = " SELECT ";
        $cQuery.= " * FROM ideia ";
        $cQuery.= " WHERE ";
        $cQuery.= " ideia_id = :nId";

        $oQuery = $this->oDb->prepare($cQuery);
        $oQuery->bindValue(':nId'        , $this->__get('nId'));

        $oQuery->execute();

        return $oQuery->fetchAll(\PDO::FETCH_ASSOC);
    }

    /*Metodo POST salvar os dados 
    --------------------------------------------*/
    public function insert(){
       //Montagem da query
        $cQuery =" INSERT INTO ideia ";
        $cQuery.="       (ideia_id_usr,ideia_titulo, ideia_assunto,ideia_descricao,ideia_data ) " ;
        $cQuery.="  VALUES ";
        $cQuery.="      (:nId_Usr, :cTitulo, :cAssunto, :cDescricao, :dData) ";

        $oQuery = $this->oDb->prepare($cQuery);

        $oQuery->bindValue(':nId_Usr'        ,intval( $this->__get('nId_Usr')));
        $oQuery->bindValue(':cTitulo'       , $this->__get('cTitulo'));
        $oQuery->bindValue(':cAssunto'      , $this->__get('cAssunto'));
        $oQuery->bindValue(':cDescricao'    , $this->__get('cDescricao'));
        $oQuery->bindValue(':dData'         , $this->__get('dData'));

        $oQuery->execute();
        $oQuery->fetchAll(\PDO::FETCH_ASSOC);

        return $this;

    }

    
    /*Metodo PUT salvar os dados 
    --------------------------------------------*/
    public function update(){
        //Montagem da query
         $cQuery =" UPDATE ideia ";
         $cQuery.="  SET ";
         $cQuery.="      ideia_data       = :dData,
                         ideia_titulo     = :cTitulo,
                         ideia_assunto    = :cAssunto,
                         ideia_descricao  = :cDescricao ";
         $cQuery.="  WHERE ";
         $cQuery.="     ideia_id = :nId ";
 
         $oQuery = $this->oDb->prepare($cQuery);
        
         $oQuery->bindValue(':nId'           ,intval($this->__get('nId')));
         $oQuery->bindValue(':dData'         , $this->__get('dData'));
         $oQuery->bindValue(':cTitulo'       , $this->__get('cTitulo'));
         $oQuery->bindValue(':cAssunto'      , $this->__get('cAssunto'));
         $oQuery->bindValue(':cDescricao'          , $this->__get('cDescricao'));
       
         $oQuery->execute();
         $oQuery->fetchAll(\PDO::FETCH_ASSOC);
         return $this;
 
     }

     //Deletar um Registro
     public function delete(){
        $cQuery = "DELETE FROM ideia WHERE ideia_id = :nId";

        $oQuery = $this->oDb->prepare($cQuery);
        $oQuery->bindValue(':nId'     , intval($this->__get('nId')) );
        $oQuery->execute();

        return $oQuery->fetchAll(\PDO::FETCH_ASSOC);
    }
    
   
    
    //Metodo Validar os dados antes de gravar no banco
    

    


}