<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<!-- <h1>DataTables 1</h1> -->
				<div class="date" style="font-size:28px;">
					<span id="weekDay" class="weekDay"></span>,
					<span id="day" class="day"></span> de
					<span id="month" class="month"></span> del
					<span id="year" class="year"></span>
				</div>
				<div class="clock" style="font-size:24px;">
					<span id="hours" class="hours"></span> :
					<span id="minutes" class="minutes"></span> :
					<span id="seconds" class="seconds"></span>
				</div>

			</div>
			<!-- <div id="content" class="col-lg-12">
				<div class="date">
					<span id="weekDay" class="weekDay"></span>,
					<span id="day" class="day"></span> de
					<span id="month" class="month"></span> del
					<span id="year" class="year"></span>
				</div>
				<div class="clock">
					<span id="hours" class="hours"></span> :
					<span id="minutes" class="minutes"></span> :
					<span id="seconds" class="seconds"></span>
				</div>
			</div> -->
			<!-- <div class="col-lg-12">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
			<!-- Bloque de anuncios adaptable -->
			<!-- <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6676636635558550" data-ad-slot="8523024962" data-ad-format="auto" data-full-width-responsive="true"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div> -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">DataTables</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- /.content-header -->

<?php
/* $grupo = $_GET["g"];
if ($grupo == "g1") {
	$gerencia = " / Gerencia de Lineas 1,3,4 y 12";
} elseif ($grupo == "g2") {
	$gerencia = " / Gerencia de Lineas 2,5,6 y B";
} elseif ($grupo == "g3") {

	$gerencia = " / Gerencia de Lineas 7,8,9 y A";
} else {
	$gerencia = " / Todas las Gerencias";
} */

if (isset($_GET["opt"]) && $_GET["opt"] == "all") :




	$contacts = DocumentosData::getAll();
?>


	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">

					<div class="card">
						<div class="card-header">
							<h1 class=""><b>D O C U M E N T O S </b><?php //echo $gerencia; 
																	?></h1>
							<a href="./?view=documentos&opt=new" class="btn btn-secondary">Registrar Documento</a>
						</div>
						<div class="card-body">
							<?php if (count($contacts) > 0) : ?>
								<div>
									<table class="table table-striped table-bordered table-hover datatable responsive">
										<thead>
											<th>N. TURNO Y OFICIO</th>
											<th>F. TURNO</th>
											<th>F. OFICIO</th>
											<th>ASUNTO</th>
											<th>F. RESPUESTA</th>
											<th>REGISTRO</th>
											<th>CLASIFICACION</th>

											<th>Acciones</th>
										</thead>
										<?php foreach ($contacts as $con) :
											$item  = $con->getClasificaciones();
											$usuario  = $con->getRegistro(); ?>
											<tr>
												<td><?php echo $con->n_turno; ?></td>
												<td><?php echo $con->f_e_turno; ?></td>
												<td><?php echo $con->f_e_oficio; ?></td>
												<td><?php echo $con->asunto; ?></td>
												<td><?php echo $con->f_respuesta; ?></td>
												<td><?php echo $usuario->name; ?></td>
												<td><?php echo $item->name; ?></td>

												<td style="width:190px; ">
													<a href="./?view=documentos&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
													<a href="./?action=documentos&opt=del&id=<?php echo $con->id; ?>&g=<?php echo $grupo; ?>" id="item-<?php echo $con->id; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</a>
													<script type="text/javascript">
														$("#item-<?php echo $con->id; ?>").click(function(e) {
															e.preventDefault();
															x = confirm("Seguro desea eliminar este elemento?");
															if (x) {
																window.location = "./?action=documentos&opt=del&id=<?php echo $con->id; ?>";
															}
														});
													</script>
												</td>
											</tr>
										<?php endforeach; ?>
									</table>
								</div>

							<?php else : ?>
								<p class="alert alert-warning">No hay Documentos registradas.</p>
							<?php endif; ?>
						</div>


					</div>

				</div>
			</div>
		</div>
	</section>
<?php elseif (isset($_GET["opt"]) && $_GET["opt"] == "new") : ?>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">

					<div class="card">
						<div class="card-header">
							<h1 class="">Nueva Interrupcion</h1>
							<a href="./?view=documentos&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
						</div>
						<div class="card-body">

							<form class="row g-3" method="post" action="./?action=documentos&opt=add">
								<div class="col-md-6 mb-3">
									<label for="name" class="form-label">NÚMERO DEL TURNO DE CORRESPONDENCIA Y OFICIO</label>
									<input type="text" name="n_turno" id="lastname" class="form-control" placeholder="SDGOXX-XX UT/XXXX/XXXX" required>

								</div>
								<div class="col-md-6 mb-3">
									<label for="name" class="form-label">FECHA DE ELABORACIÓN DEL TURNO</label>
									<input type="date" name="f_e_turno" id="name" class="form-control" placeholder="DD/MM/AAAA" required>

								</div>
								<div class="col-md-6 mb-3">
									<label for="name" class="form-label">FECHA DE ELABORACIÓN DEL OFICIO</label>
									<input type="date" name="f_e_oficio" id="name" class="form-control" placeholder="DD/MM/AAAA" required>

								</div>
								<div class="col-md-6 mb-3">
									<label>A S U N T O</label>
									<textarea class="form-control" rows="3" name="asunto" placeholder="INGRESE EL ASUNTO"></textarea>
								</div>
								<div class="col-md-6 mb-3">
									<label for="area_atencion" class="form-label">AREA TURNADA</label>
									<?php
									$cats = AreasturData::getAll();
									?>
									<?php if (count($cats) > 0) : ?>
										<select name="id_area" class="form-control" required>
											<option value="">-- AREA TURNADA --</option>
											<?php foreach ($cats as $cat) : ?>
												<option value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
											<?php endforeach; ?>
										</select>
									<?php endif; ?>
								</div>
								<div class="col-md-6 mb-3">
									<label>I N S T R U C C I O N E S</label>
									<textarea class="form-control" rows="3" name="instrucciones" placeholder="INGRESE LAS INSTRUCCIONES"></textarea>
								</div>
								<div class="col-md-6 mb-3">
									<label for="name" class="form-label">FECHA LÍMITE DE RESPUESTA</label>
									<input type="date" name="f_respuesta" id="name" class="form-control" placeholder="DD/MM/AAAA" required>

								</div>
								<div class="col-md-6 mb-3">
									<label for="name" class="form-label">NÚMERO DE OFICIO</label>
									<input type="text" name="n_oficio" id="lastname" class="form-control" placeholder="INGRESA EL NUMERO DE OFICIO" required>

								</div>
								<div class="col-md-6 mb-3">
									<label for="area_atencion" class="form-label">PERSONA QUE REGISTRÓ</label>
									<?php
									$cats = UserData::getAll();
									?>
									<?php if (count($cats) > 0) : ?>
										<select name="id_usuario" class="form-control" required>
											<option value="">-- PERSONA QUE REGISTRÓ --</option>
											<?php foreach ($cats as $cat) : ?>
												<option value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
											<?php endforeach; ?>
										</select>
									<?php endif; ?>
								</div>
								<div class="col-md-6 mb-3">
									<label>O B S E R V A C I O N E S</label>
									<textarea class="form-control" rows="3" name="observaciones" placeholder="INGRESE LAS OBSERVACIONES"></textarea>
								</div>
								<div class="col-md-6 mb-3">
									<label for="area_atencion" class="form-label">CLASIFICACIÓN DE PENDIENTES</label>
									<?php
									$cats = ClasificacionesData::getAll();
									?>
									<?php if (count($cats) > 0) : ?>
										<select name="id_estado" class="form-control" required>
											<option value="">-- CLASIFICACIÓN DE PENDIENTES --</option>
											<?php foreach ($cats as $cat) : ?>
												<option value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
											<?php endforeach; ?>
										</select>
									<?php endif; ?>
								</div>

								<!-- <div class="col-md-6 mb-3">
									<label for="exampleInputFile">INGRESAR ARCHIVO</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="exampleInputFile">
											<label class="custom-file-label" for="exampleInputFile">SELECCIONA EL ARCHIVO</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text">Subir</span>
										</div>
									</div>
								</div> -->

								<div class="col-md-12">
									<button type="submit" class="btn btn-primary">Agregar</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
<?php elseif (isset($_GET["opt"]) && $_GET["opt"] == "edit") :
	$con = DocumentosData::getById($_GET["id"]);
?>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">

					<div class="card">
						<div class="card-header">
							<h1 class="">Editar Contacto</h1>
							<a href="./?view=inter&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
						</div>
						<div class="card-body">

							<form method="post" action="./?action=inter&opt=update">
								<input type="hidden" name="_id" value="<?php echo $con->id; ?>">
								<div class="mb-3">
									<label for="name" class="form-label">Nombre</label>
									<input type="text" name="name" class="form-control" value="<?php echo $con->name; ?>" id="name" placeholder="Nombre">
								</div>
								<div class="mb-3">
									<label for="lastname" class="form-label">Apellidos</label>
									<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $con->lastname; ?>" placeholder="Apellidos">
								</div>
								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Direccion</label>
									<input type="text" name="address" id="address" class="form-control" value="<?php echo $con->address; ?>" placeholder="Direccion">
								</div>
								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Email </label>
									<input type="email" name="email" class="form-control" value="<?php echo $con->email; ?>" placeholder="Email">

								</div>
								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Telefono</label>
									<input type="text" name="phone" id="phone" class="form-control" value="<?php echo $con->phone; ?>" placeholder="Telefono">
								</div>

								<button type="submit" class="btn btn-success">Actualizar</button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
<?php endif; ?>