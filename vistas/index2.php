<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Easy Stock</title>
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/mdb.min.css">
	<link rel="stylesheet" href="./css/all.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

	<header class="header full-box">
	    <div class="header-brand text-center full-box">
	        <a href="index.html">
	            <img src="./assets/img/negroLogo.svg" alt="logo" class="img-fluid">
	        </a>
	    </div>

	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold" >
	            <ul class="list-unstyled full-box">
	                <li>
	                    <a href="index.html" >Inicio<span class="full-box" ></span></a>
	                </li>
	            </ul>
	        </nav>
			
	        <div class="header-button full-box text-center btn-login-menu" >
	            <i class="fas fa-user-alt" onclick="show_popup_login()" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Login" ></i>

					<?php
						include __DIR__ . "/vistas/login.php";
					?>

	                <!-- Inicio de sesion -->
	                <!-- <span class="text-center poppins-regular font-weight-bold">Inicio de sesión</span>
	                <form class="full-box" action="">
	                    <div class="form-outline mb-4">
	                        <input type="email" class="form-control" name="login_email_cliente" id="login_email" maxlength="70" required="" placeholder="Email" >
	                    </div>
	                    <div class="form-outline mb-4">
	                        <input type="password" class="form-control" name="login_clave_cliente" id="login_password" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" placeholder="Contraseña" >
	                    </div>
	                    <p class="text-center">
	                        <button class="btn btn-info btn-sm w-100">Iniciar sesión</button>
	                    </p>
	                </form> -->
					
	                <!-- Cerrar sesion --
	                <div class="text-center full-box">
	                    <i class="fas fa-user-circle fa-4x"></i>
	                </div>
	                <span class="poppins-regular font-weight-bold">Nombre de usuario</span>
	                <div class="text-center full-box">
	                    <a href="#" class="btn btn-info btn-sm w-100"><i class="fas fa-user-cog fa-fw"></i> &nbsp; Mi cuenta</a>
	                </div>
	                <div class="text-center full-box">
	                    <a href="#" class="btn btn-info btn-sm w-100"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
	                </div>
	                <form class="full-box" action="">
	                    <button class="btn btn-raised btn-primary btn-sm w-100" ><i class="fas fa-door-open fa-fw"></i> &nbsp; Cerrar sesión</button>
	                </form>-->
	                
	            </div>
	        </div>


	    </div>
	</header>


	<!-- Contenido -->
	<div class="banner">
	    <div class="banner-body">
	        <h3 class="text-uppercase bienvenida">Bienvenido a Easy Stock</h3>
	        <p class="bienvenida2">El mejor sistema de admmministración para restaurantes</p>
	        <!-- <a href="menu.html" class="btn btn-warning"><i class="fas fa-hamburger fa-fw"></i> &nbsp; Ir al menu</a> -->
	    </div>
	</div>
	<div class="container container-web-page">
		<h1 class="text-center text-uppercase poppins-regular fs-3 font-weight-bold">Simplifica tu gestión y flujo de inventario</h1>
		<br>
		<p class="text-justify fs-4 fw-semibold">
			Con nuestro sistema obtendras uno de los mejores sistemas para administrar la recepción de pedidos a proveedores y el flujo de inventario de tu negocio en tiempo real,
			podrás ver cada ingreso, con información detallada que te permite configurar alertas, cuando el stock disponible es bajo, así puedes realizar tus pedidos con información actualizada
			y sin los molestos inventarios manuales que pueden ser confusos y suceptibles a errores.
		</p>
	</div>

	<div class="container container-web-page">
	    <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Nuestros servicios</h3>
	    <br>
	    <div class="row">
	        <div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-clipboard-list fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Registro de inventario</h5>
				<p class="text-center">Registro de productos por categoria con ubicación dentro del establecimiento</p>
	        </div>
	        <div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-clipboard-check fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Check list</h5>
	            <p class="text-center">Visualiza en tiempo real el inventario y toma desiciones basadas en este</p>
	        </div>
	        <div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-object-group fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Modulos especificos</h5>
	            <p class="text-center">Organizamos todo en modulos, para que sea fácil encontrar </p>
	        </div>
			<div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-receipt fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Informes y organización</h5>
	            <p class="text-center">Organiza de acuerdo a tus necesidades, los in</p>
	        </div>
	        <div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-barcode fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Identificacion única</h5>
	            <p class="text-center">Cada uno de los productos del inventario estará identificado y así mismo clasificado dentro del sistema.</p>
	        </div>
	        <div class="col-12 col-sm-6 col-md-4">
	            <p class="text-center"><i class="fas fa-bell fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Alertas de stock</h5>
	            <p class="text-center">El sistema podrá generar alertas cuando el stock este bajo los parámetros establecidos.</p>
	        </div>
	    </div>
	</div>

	<hr>

	<div class="container container-web-page">
	    <div class="row justify-content-md-center">
	        <div class="col-12 col-md-6">
	            <figure class="full-box2">
	                <img src="./assets/img/registration.png" alt="registration" class="img-fluid">
	            </figure>
	        </div>
	        <div class="w-100"></div>
	        <div class="col-12 col-md-6">
	            <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Crea tu cuenta</h3>
	            <p class="text-center">
	                Si deseas crear una cuenta y probar la aplicación, es muy fácil y rápido.
	            </p>
	            <p class="text-center">
					<button class="btn btn-primary" id="mostrarFormulario">Contáctanos</button>
	            </p>


				<div class="rounded p-4" style="width: 100%;">
					<div id="formularioContainer" class="hidden">
						<h6 class="text-center poppins-regular font-weight-medium">Nos comunicaremos contigo</h6>
						<form action="formulario.php" method="post" id="formulario">
							<div class="form-group">
								<label for="nombre" class="poppins-regular font-weight-medium">Nombre <span class="obligatorio">*</span></label>
								<input type="text" class="form-control" name="introducir_nombre" id="nombre" required="obligatorio"
									placeholder="Escribe tu nombre">
							</div>
							<div class="form-group">
								<label for="email" class="poppins-regular font-weight-medium">Email <span class="obligatorio">*</span></label>
								<input type="email" class="form-control" name="introducir_email" id="email" required="obligatorio"
									placeholder="Escribe tu Email">
							</div>
							<div class="form-group">
								<label for="telefono" class="poppins-regular font-weight-medium">Teléfono</label>
								<input type="tel" class="form-control" name="introducir_telefono" id="telefono"
									placeholder="Escribe tu teléfono">
							</div>
							<div class="form-group">
								<label for="asunto" class="poppins-regular font-weight-medium">Asunto <span class="obligatorio">*</span></label>
								<input type="text" class="form-control" name="introducir_asunto" id="asunto" required="obligatorio"
									placeholder="Escribe un asunto">
							</div>
							<div class="form-group">
								<label for="mensaje" class="poppins-regular font-weight-medium">Mensaje <span class="obligatorio">*</span></label>
								<textarea name="introducir_mensaje" class="form-control" id="mensaje" required="obligatorio"
									placeholder="Deja aquí tu comentario..."></textarea>
							</div>
							<div id="botonContainer" class="text-center mt-3">
								<button type="submit" name="enviar_formulario" id="enviar" class="btn btn-success">
									<strong>Enviar</strong>
								</button>
							</div>
							<p class="aviso">
								<span class="obligatorio"> *</span> Los campos son obligatorios.
							</p>
						</form>
					</div>
				</div>
	        </div>
	    </div>
	</div>

	<!-- Footer -->
	<footer class="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" ><i class="far fa-copyright"></i>2023 EasyStock, AnyeDeveloper</h5></li>
	                    <li> Todos los derechos reservados </li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Colombia</h5></li>
	                    <li><i class="fas fa-map-marker-alt fa-fw"></i>Bogotá D.C.</li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Siguenos en:</h5> </li>
	                    <li>
	                        <a href="" class="footer-link" target="_blank" >
	                            <i class="fab fa-facebook fa-fw"></i> Facebook
	                        </a>
	                    </li>

	                    <li>
	                        <a href="" class="footer-link" target="_blank" >
								<i class="fab fa-whatsapp fa-fw"></i>
	                                Whatsapp
	                        </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>
	<script src="./js/mdb.min.js" ></script>
	<script src="./js/main.js" ></script>
	<script src="./js/sweetalert2.js" ></script>
</body>
</html>