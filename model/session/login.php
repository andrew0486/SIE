<?php
    /**
    * fuciones
    */
   //include '../db/conectionDB.php';
   //conection();
   //conectionDB(conection());
   //$datos = query("SELECT * FROM sie.employees ORDER BY one_first_name, two_last_name, one_first_name, two_first_name;");
   
   $userName = $_POST['username'];
   $password = $_POST['pass'];

   include '../db/parameterDB.php';
   $conexion = mysql_connect($host, $user, $pass) or die("problemas con la conexion");
   mysql_select_db($db, $conexion) or die("problemas al conectar bd");
   
   $consulta = mysql_query("SELECT * FROM sie.employees 
       where document_number like '$userName'
       and password like '$password'
       ORDER BY one_first_name, two_last_name, one_first_name, two_first_name;") 
   or die("problemas en consula".  mysql_error());

   //while ($reg = mysql_fetch_array($datos)){
   //     echo $reg['DOCUMENT_NUMBER']." - ".$reg['ONE_FIRST_NAME']." ".$reg['TWO_FIRST_NAME']." ".$reg['ONE_LAST_NAME']." ".$reg['TWO_LAST_NAME']."<br>";
   //}
   $dato = mysql_fetch_array($consulta);
   if (isset($dato['DOCUMENT_NUMBER']) && !empty($dato['DOCUMENT_NUMBER'])){
       header('Location: ../../view/employee_edit.php');
   }else{
       echo "datos incorrectos";
   }
?>
