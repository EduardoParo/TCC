<?php
namespace mf\model;

/* Classe Model instancia o Objeto Odb
------------------------------*/
abstract class Model {

    //Variavel Propiedades do Objeto
	protected $oDb;

    //Construtoe
	public function __construct(\PDO $oDb) {
		$this->oDb = $oDb;
	}
}
?>