<?php
    class union extends mysqli 
    {
	   public function __construct()
       {

	        parent::__construct('localhost','id13327637_user','Peritocontador.500');
            $this->query("SET NAMES 'utf8'");
            $this->connect_errno ? die('Error en conexion con la base de datos.') : $error="<br><br> Conectado a la base de datos: ";
            //echo $error;
            unset($error);
       }
    }
?>
