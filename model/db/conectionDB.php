<?php
    /*
    * To change this template, choose Tools | Templates
    * and open the template in the editor.
    */
    include 'parameterDB.php';
    
    function conection() {
        $conection = mysql_connect(host(), user(), pass()) or die("no se ha podido conectar");
        return $conection;
        
    }   
    
    function conectionDB($conection) {
        $conectionDB = mysql_select_db(db(), conection()) or die("problemas al conectar a la bd");
        return $conectionDB;
    }
    
    function query($consulta){
        conection();
        conectionDB(conection());
        $query = mysql_query($consulta, conection()) or die("problemas en consula".  mysql_error());
        return $query;
    }
?>
