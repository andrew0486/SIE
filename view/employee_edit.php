<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SAGI Edición Funcionarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body onload="Combos(subdirectorate);">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="container span2"></div>
			<!--============columna Formulario==================-->
			<div class="container span8">
				<form class="form-horizontal" action="EmployeeSave.jsp" method="post">
					<legend>
						<div class="row">
							<div class="span4 offset1">Registrar Datos</div>
						</div>
					</legend>
					<div class="row">
						<div class="span5 offset1">
							Nombres:<br>
							<div class="control-group">
								<div class="span6">
									<input type="text" class="input-block-level" autocomplete="off" id="oneFirstName" placeholder="Primer Nombre" maxlength="45" name="oneFirstName" required
									value=""/>	
								</div>
								<div class="span6">
									<input type="text" class="input-block-level" autocomplete="off" id="twoFirstName" placeholder="Segundo Nombre" maxlength="45" name="twoFirstName"
									value=""/>	
								</div>
							</div>
						</div>
						<div class="span5">
							Apellidos:<br>
							<div class="control-group">
								<div class="span6">
									<input type="text" class="input-block-level" autocomplete="off" id="oneLastName" placeholder="Primer Apellido" maxlength="45" name="oneLastName" required
									value=""/>	
								</div>
								<div class="span6">
									<input type="text" class="input-block-level" autocomplete="off" id="twoLastName" placeholder="Segundo Apellido" maxlength="45" name="twoLastName" required
									value=""/>	
								</div>
							</div>
						</div>
						<div class="span1"></div>
					</div>

					<div class="row">
						<div class="span5 offset1">
							Dirección:<br>
							<input type="text" class="input-block-level" autocomplete="off" id="streetAddress" placeholder="tipo numero1 - numero 2 barrio" maxlength="45" name="streetAddress" required
							value=""
							/>
						</div>
						<div class="span5">
							Ciudad de Residencia:<br>
							<input type="text" class="input-block-level" id="cityResident" placeholder="Ciudad" maxlength="45" name="cityResident" required
							value=""
							/>
						</div>
						<div class="span1"></div>
					</div>

					<br>
					<div class="row">
						<div class="span5 offset1">
							Teléfono:<br>
							<input type="text" class="input-block-level" autocomplete="off" id="phoneNumber" placeholder="09874540.. o 31241401.." maxlength="10"  
							name="phoneNumber"  pattern="[0-9]{10}" required
							value=""
							/>
						</div>
						<div class="span5">
							Correo Electrónico:<br>
							<input type="email" class="input-block-level" autocomplete="off" id="email" placeholder="ejemplo@ejemplo.com" maxlength="45" name="email" required
							value=""
							/>
						</div>
						<div class="span1"></div>
					</div>

					<br>
					<div class="row">
						<div class="span3 offset1">
							Tipo de Documento:<br>
							<select name="documentType" class="input-block-level">
								<option value="CEDULA CIUDADANÍA">CEDULA CIUDADANÍA</option>
								<option value="CEDULA EXTRANJERÍA">CEDULA EXTRANJERÍA</option>
							</select>
						</div>
						<div class="span4">
							Ciudad de Expedición:<br>
							<input type="text" class="input-block-level" id="documentCity" placeholder="Ciudad(Departamento)" maxlength="45" name="documentCity" required
							value=""/>
						</div>
						<div class="span3">
							Número de Documento:<br>
							<input type="text" class="input-block-level" autocomplete="off" id="documentNumber" placeholder="N° documento de identidad" maxlength="25" name="documentNumber" required
							value=""/>
						</div>
						<div class="span1"></div>
					</div>
					<br>
					<div class="row">
						<div class="span10 offset1">
							Funciones:<br>
							<div class="container">
								<div class="span3">
									<h4>Usuarios</h4>
									<label for="createUser" class="checkbox"><input type="checkbox" name="createUser" id="createUser" value="createUser" disabled="disabled"
									
									>Crear Usuarios</label>
									<label for="uploadUser" class="checkbox"><input type="checkbox" name="uploadUser" id="uploadUser" value="uploadUser" disabled="disabled"
									
									>uploadUser</label>
									<label for="deleteUser" class="checkbox"><input type="checkbox" name="deleteUser" id="deleteUser" value="deleteUser" disabled="disabled"
									
									>deleteUser</label>
									<h4>Expedientes</h4>
									<label for="createFile" class="checkbox"><input type="checkbox" name="createFile" id="createFile" value="createFile"
									
									>createFile</label>
									<label for="uploadFile" class="checkbox"><input type="checkbox" name="uploadFile" id="uploadFile" value="uploadFile"
									
									>uploadFile</label>
									<label for="deleteFile" class="checkbox"><input type="checkbox" name="deleteFile" id="deleteFile" value="deleteFile"
									
									>deleteFile</label>
									<h4>Procesos</h4>
									<label for="createProcess" class="checkbox"><input type="checkbox" name="createProcess" id="createProcess" value="createProcess"
									
									>createProcess</label>
									<label for="uploadProcess" class="checkbox"><input type="checkbox" name="uploadProcess" id="uploadProcess" value="uploadProcess"
									
									>uploadProcess</label>
									<label for="deleteProcess" class="checkbox"><input type="checkbox" name="deleteProcess" id="deleteProcess" value="deleteProcess"
									
									>deleteProcess</label>
								</div>
								<div class="span3">
									<h4>Autos de Inicio</h4>
									<label for="createAutoStart" class="checkbox"><input type="checkbox" name="createAutoStart" id="createAutoStart" value="createAutoStart"
									
									>createAutoStart</label>
									<label for="uploadAutoStart" class="checkbox"><input type="checkbox" name="uploadAutoStart" id="uploadAutoStart" value="uploadAutoStart"
									
									>uploadAutoStart</label>
									<label for="deleteAutoStart" class="checkbox"><input type="checkbox" name="deleteAutoStart" id="deleteAutoStart" value="deleteAutoStart"
									
									>deleteAutoStart</label>
									<h4>Autos de Requerimiento</h4>
									<label for="createAutoRequeriment" class="checkbox"><input type="checkbox" name="createAutoRequeriment" id="createAutoRequeriment" value="createAutoRequeriment"
									
									>createAutoRequeriment</label>
									<label for="uploadAutorequeriment" class="checkbox"><input type="checkbox" name="uploadAutorequeriment" id="uploadAutorequeriment" value="uploadAutorequeriment"
									
									>uploadAutorequeriment</label>
									<label for="deleteAutoRequeriment" class="checkbox"><input type="checkbox" name="deleteAutoRequeriment" id="deleteAutoRequeriment" value="deleteAutoRequeriment"
									
									>deleteAutoRequeriment</label>
									<h4>Avisos</h4>
									<label for="createNotice" class="checkbox"><input type="checkbox" name="createNotice" id="createNotice" value="createNotice"
									
									>createNotice</label>
									<label for="uploadNotice" class="checkbox"><input type="checkbox" name="uploadNotice" id="uploadNotice" value="uploadNotice"
									
									>uploadNotice</label>
									<label for="deleteNotice" class="checkbox"><input type="checkbox" name="deleteNotice" id="deleteNotice" value="deleteNotice"
									
									>deleteNotice</label>
								</div>
								<div class="span3">
									<h4>Conceptor Técnicos</h4>
									<label for="createTechnicalConcept" class="checkbox"><input type="checkbox" name="createTechnicalConcept" id="createTechnicalConcept" value="createTechnicalConcept"
									
									>createTechnicalConcept</label>
									<label for="uploadTechnicalConcept" class="checkbox"><input type="checkbox" name="uploadTechnicalConcept" id="uploadTechnicalConcept" value="uploadTechnicalConcept"
									
									>uploadTechnicalConcept</label>
									<label for="deleteTechnicalConcept" class="checkbox"><input type="checkbox" name="deleteTechnicalConcept" id="deleteTechnicalConcept" value="deleteTechnicalConcept"
									
									>deleteTechnicalConcept</label>
									<h4>Resoluciones</h4>
									<label for="createResolution" class="checkbox"><input type="checkbox" name="createResolution" id="createResolution" value="createResolution"
									
									>createResolution</label>
									<label for="uploadResolution" class="checkbox"><input type="checkbox" name="uploadResolution" id="uploadResolution" value="uploadResolution"
									
									>uploadReolution</label>
									<label for="deleteResolution" class="checkbox"><input type="checkbox" name="deleteResolution" id="deleteResolution" value="deleteResolution"
									
									>deleteResolution</label>
								</div>
							
							</div>
						</div>
						<div class="span1"></div>
					</div>

					<br>
					<div class="row">
						<div class="span5 offset1">
							Subdirección:<br>
							<select id="subdirectorate" name="subdirectorate" class="input-block-level" required onchange="Combos(this)">
								<option></option>
								<option value="">
									
								</option>
							</select>
						</div>
						<div class="span5">
							Jefe Inmediato o Supervisor:<br>
							<select id="manager" name="manager" class="input-block-level">
								<option value=""></option>
								<option value="<%= listEmployees.get(i).getEmployeeId()%>">
									
								</option>
							</select>
						</div>
						<div class="span1"></div>
					</div>

					<br>
					<div class="row">
						<div class="span5 offset1">
							Fecha de Incio de Contrato:<br>
							<input type="date" class="input-block-level" id="hireDate" placeholder="Tunja(Bayacá)" maxlength="45" name="hireDate" required
							value=""/>
							
						</div>
						<div class="span5">
							Fecha de Finalizacion de Contrato:<br>
							<input type="date" class="input-block-level" id="endDate" placeholder="Tunja(Bayacá)" maxlength="45" name="endDate"
							value=""/>
						</div>
						<div class="span1"></div>
					</div>

					<br>
					<div class="row">
						<div class="span5 offset1">
							Cargo:<br>
							<div class="control-group">
								<div class="span8">
									<select  name="job" class="input-block-level">
										<option value="">
											
										</option>
									</select>
								</div>
								<div class="span4">
									<a data-toggle="modal" href="#newJob" class="btn btn-default input-block-level" onclick="sendListJob()"><strong>Nuevo!</strong></a>
								</div>
							</div>		
						</div>
						<div class="span5">
							Estado Funcionario:<br>
							<select class="input-block-level" name="activeState">
								<option value="0">INACTIVO</option>
								<option value="1">ACTIVO</option>
							</select>
						</div>
						<div class="span1"></div>
					</div>

					<br>
					<div class="row">
						<div class="span8 offset2 control-group">
							<div class="span6">
								<button type="submit" class="btn btn-primary input-block-level">Aceptar</button>	
							</div>
							<div class="span6">
								<a href="employeeList.jsp" class="btn btn-default input-block-level" >Cancelar</a>	
							</div>
							
							
						</div>
						<div class="span2"></div>
					</div>
				</form>
			</div>
			<!--============columna derecha==================-->
			<div class="container span2"></div>
		</div>
	</div>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>
</html>