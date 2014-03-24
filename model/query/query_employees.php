<?php
        include '../db/parameterDB.php';
        $conexion = mysql_connect($host, $user, $pass) or die("problemas con la conexion");
        mysql_select_db($db, $conexion) or die("problemas al conectar bd");

        $consulta = mysql_query("SELECT * FROM sie.employees
            ORDER BY one_first_name, two_last_name, one_first_name, two_first_name;") 
        or die("problemas en consula".  mysql_error()); 
        
        
        

   //while ($reg = mysql_fetch_array($consulta)){
     //   echo $reg['DOCUMENT_NUMBER']." - ".$reg['ONE_FIRST_NAME']." ".$reg['TWO_FIRST_NAME']." ".$reg['ONE_LAST_NAME']." ".$reg['TWO_LAST_NAME']."<br>";
   //}   
?>
<!DOCTYPE html>
<html lang="ESP">
<head>
<meta charset="utf-8">
<title>SIE - FUNCIONARIOS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.css">
<link href="../../css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
	<jsp:include page="_top.jsp"></jsp:include>
	<jsp:include page="_heroUnit.jsp"></jsp:include>
	<div class="container-fluid">
		<div class="row-fluid">
			<table class="table table-striped table-hover-green">
				<thead>
					<tr>
						<td style ="aligne: center;"><h4>PRIMER APELLIDO</h4></td>
						<td aligne = 'center'><h4>SEGÚNDO APELLIDO</h4></td>
						<td aligne = 'center'><h4>PRIMER NOMBRE</h4></td>
                                                <td aligne = 'center'><h4>SEGÚNDO NOMBRE</h4></td>
						<!--% if (administrator != null){ %-->
						<td><h4>TIPO DOCUMENTO</h4></td>
						<td><h4>NUMERO DOCUMENTO</h4></td>
						<td><h4>CIUDAD EXPEDICIÓN</h4></td>
						<td><h4>DIRECCIÓN</h4></td>
						<!--% }%-->
						<td><h4>TELEFÓNO</h4></td>
						<td style = "aligne: center; "><h4>EMAIL</h4></td>
						<td><h4>SUBDIRECCIÓN</h4></td>
						<td><h4>PROFESIÓN</h4></td>
						<!--% if (administrator != null){ %-->
						<td><h4>ESTADO</h4></td>
						<td><h4>EDICIÓN</h4></td>
						<!--% }%-->
					</tr>
				</thead>
				<tbody>
					<?php
						while ($reg = mysql_fetch_array($consulta)){
                                                    //Querty Subdirectorate
                                                    $subdirectorate = mysql_query("SELECT * FROM sie.subdirectorates s where
                                                        s.subdirectorate_id like $reg[SUBDIRECTORATE_ID];")
                                                    or die("problemas en consula".  mysql_error());
                                                    //Querty array subdir
                                                    $subd = mysql_fetch_array($subdirectorate);
                                                    //Querty job
                                                    $job = mysql_query("SELECT * FROM sie.jobs s where
                                                        s.job_id like $reg[JOB_ID];")
                                                    or die("problemas en consula".  mysql_error());
                                                    //Querty array job
                                                    $j = mysql_fetch_array($job);
                                                    $estado = "INACTIVO";
                                                    if ($reg[ACTIVE_STATE] == 1){
                                                        $estado = 'ACTIVO';
                                                    }
					echo "
					<tr>
						<!--%if (employee.getEmployeeId()!=1){ %-->
							<td>$reg[ONE_LAST_NAME]</td>
							<td>$reg[TWO_LAST_NAME]</td>
							<td>$reg[ONE_FIRST_NAME]</td>
							<td>$reg[TWO_FIRST_NAME]</td>
							<!--% if (administrator != null){ %-->
							<td>$reg[DOCUMENT_TYPE]</td>
							<td>$reg[DOCUMENT_NUMBER]</td>
							<td>$reg[DOCUMENT_CITY]</td>
							<td>$reg[STREET_ADDRESS] - $reg[CITY]</td>
							<!--% }%-->
							<td>$reg[PHONE_NUMBER]</td>
							<td>$reg[EMAIL]</td>
                                                            
							<td>$subd[SUBDIRECTORATE_NAME]</td>
							<td>$j[JOB_TITLE]</td>
							<!--% if (administrator != null){ %-->
							<td>".
                                                            $estado ."
							</td>
							<td>
								<a href='../../view/employee_edit.php?id=$reg[DOCUMENT_NUMBER]' class='btn btn-primary btn-small'>Editar</a>
							</td>
					<!--%
						} //end for 
						//SessionDB.close();
					%-->";
                                                }?>
				</tbody>
			</table>
		</div>
		<!--% if (administrator != null){ %-->
		<div class="row-fluid">
                    <a href="../../view/employee_edit.php" class="btn btn-primary "><img alt="Prev" src="../../img/glyphicons/glyphicons_006_user_add.png" height="30" width="30"> <strong>Nuevo !</strong></a>
		</div>
		<!--% }%-->
	</div>


	<!--jsp:include page="_down.jsp"></jsp:include-->
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</body>
</html>