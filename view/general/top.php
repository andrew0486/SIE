<!--NAVBAR=======================================-->
<nav class="container">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="index.jsp"> <i class="icon-home"><img
						src="img/glyphicons/glyphicons_020_home.png" height="20"
						width="19" alt=""></i> SAGI
				</a>
				<%if(userId != null && administrator == null){ %>
					<div class="nav-collapse" >
						<%if ( functionLogin != null) {%>
						<ul class="nav">
							<li class="dropdown"> <!--Dropdown de elemento conceptos-->
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-folder-open"></i> Expedientes</a>
								<ul class="dropdown-menu">
									<%if (functionLogin.isCreateFile() != false ) {%>
	  								<li><a data-toggle="modal" href="#crearExpediente" role="button" class="button">Crear Expediente</a></li> <!-- boton que llama a la venta modal-->
	  								<li><a data-toggle="modal" href="#crearExpediente" role="button" class="button">Actualizar Expediente</a></li>
	  								<%} %>
	  								<li><a href="#">Consultar Expediente</a></li>
	  							</ul>
  							</li>
							<li class="dropdown"> <!--Dropdown de elemento conceptos-->
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-file"></i> Concesión de Agua</a>
								<ul class="dropdown-menu">
									<%if (functionLogin.isCreateProcess() != false ) {%>
									<li class="dropdown-submenu"> <a href="#">Crear C.A</a>
  										<ul class="dropdown-menu">
  											<li><a>Aguas Superficiales</a></li>
  											<li><a>Aguas Subterraneas</a></li>
  											<li><a>Prospección y Exploración</a></li>
  										</ul>
  									</li>
  									<%} %>
  									<li class="dropdown-submenu"> <a href="#">Listar C.A</a>
										<ul class="dropdown-menu">
											<li><a>Aguas Superficiales</a></li>
											<li><a>Aguas Subterraneas</a></li>
											<li><a>Prospección y Exploración</a></li>
										</ul>
									</li>
									<li class="divider"></li>
									<%if (functionLogin.isCreateAutoStart() != false ) {%>
									<li><a >Crear Auto de Inicio</a></li>
									<li><a >Aprobar Auto de Inicio</a></li>
									<%} if (functionLogin.isCreateNotice() != false ) {%>
									<li><a >Crear Aviso</a></li>
									<li><a >Aprobar Aviso</a></li>
									<%} if (functionLogin.isCreateTechnicalConcept() != false ) {%>
									<li><a >Crear Concepto Técnico</a></li>
									<li><a >Aprobar Concepto Técnico</a></li>
									<%} if (functionLogin.isCreateResolution() != false ) {%>
									<li><a >Crear Resolución</a></li>
									<li><a >Aprobar Resolución</a></li>
									<%} %>
  								</ul>
  							</li>
							<li class="dropdown"> <!--Dropdown de elemento conceptos-->
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-file"></i> Permiso de Vertimiento</a>
								<ul class="dropdown-menu">
									<%if (functionLogin.isCreateProcess() != false ) {%>
									<li><a href="#"> Crear P.V</a></li>
									<%}%>
									<li><a href="#">Listar P.V</a></li>
									<li class="divider"></li>
									<%if (functionLogin.isCreateAutoStart() != false ) {%>
									<li><a >Crear Auto de Inicio</a></li>
									<li><a >Aprobar Auto de Inicio</a></li>
									<%} if (functionLogin.isCreateTechnicalConcept() != false ) {%>
									<li><a >Crear Concepto Técnico</a></li>
									<li><a >Aprobar Concepto Técnico</a></li>
									<%} if (functionLogin.isCreateResolution() != false ) {%>
									<li><a >Crear Resolución</a></li>
									<li><a >Aprobar Resolución</a></li>
									<%} %>
  								</ul>
  							</li>
  						</ul>
  						<%} %>
					</div><!--/.nav-collapse -->
				<%} %>
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<%
							if (userId == null){
						%>
							<li><a href="http://www.corpoboyaca.gov.co/index.php/es/"
								target="_blank">CORPOBOYACÁ</a></li>
							<li><a href="#">Subdirección Ténica Amnietal</a></li>
							<li><a data-toggle="modal" href="#loginModal"
								onclick="visualiza_formulario()"> Iniciar Sesión </a></li>
						<%}else if(userId != null && administrator == null){ %>
							<li><a href="employeeList.jsp"> Ver Usuarios </a></li>
							<li><a href="employee_information.jsp"><i class="icon-user"></i><strong><%= userName.toString() %></strong></a></li>
							<li><a href="Logout.jsp">Cerrar Sesión</a></li>
						<%} else if (userId != null && administrator != null){ %>
							<li><a href="prueba_select.jsp">Subdirección Ténica Amnietal</a></li>
							<li><a href="employeeList.jsp"> Administrar Usuarios </a></li>
							<li><a href="employee_information.jsp"><i class="icon-user"></i><strong><%= userName.toString() %></strong></a></li>
							<li><a href="Logout.jsp">Cerrar Sesión</a></li>
						<%} %>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>

<br></br>