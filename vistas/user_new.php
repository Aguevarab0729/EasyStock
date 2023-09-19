<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Crear nuevo Usuario</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Administración de Usuarios</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="card">
		<div class="card-body">
			<form action="./php/usuario_guardar.php" method="POST" class="FormularioAjax" autocomplete="off">
				<div class="columns">
					<div class="column">
						<div class="control">
							<label>Nombres</label>
							<input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
						</div>
					</div>
					<div class="column">
						<div class="control">
							<label>Apellidos</label>
							<input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
						</div>
					</div>
				</div>
				<div class="columns">
					<div class="column">
						<div class="control">
							<label>Usuario</label>
							<input class="input" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
						</div>
					</div>
					<div class="column">
						<div class="control">
							<label>Email</label>
							<input class="input" type="email" name="usuario_email" maxlength="70">
						</div>
					</div>
				</div>
				<div class="columns">
					<div class="column">
						<div class="control">
							<label>Clave</label>
							<input class="input" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
						</div>
					</div>
					<div class="column">
						<div class="control">
							<label>Repetir clave</label>
							<input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
						</div>
					</div>
				</div>
				<p class="has-text-centered">
					<button type="submit" class="button is-info is-rounded">Guardar</button>
				</p>
			</form>
		</div>
	</div>
</section>
