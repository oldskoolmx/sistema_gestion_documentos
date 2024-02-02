<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$contacts = EventosData::getAll();
	?>
    <section class="content">
      <div class="container-fluid">
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Eventos</h1> <?php //$prueba = Core::$user->name; echo $prueba;?>
									<a href="./?view=eventos&opt=new" class="btn btn-secondary">Nuevo Evento</a>
								</div>
								<div class="card-body">
									<?php if(count($contacts)>0):?>
										<div>
										<table class="table table-bordered datatable">
											<thead>
												<th>#</th>
												<th>Evento</th>
												<th>Acciones</th>
											</thead>
											<?php foreach($contacts as $con):?>
												<tr>
													<td><?php echo $con->id; ?></td>
													<td><?php echo $con->name; ?></td>

													<td style="width:200px; ">
														
														<a href="./?view=eventos&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
														<a href="./?action=eventos&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm" onclick="fntDelPersona(1)"><i class="fa fa-trash"></i> Eliminar</a>
														<script type="text/javascript">
															$("#item-<?php echo $con->id; ?>").click(function(e){
																e.preventDefault();
																x = confirm("Seguro desea eliminar este elemento?");
																if(x){
																	window.location = "./?action=eventos&opt=del&id=<?php echo $con->id; ?>";
																}
															});
														</script>
													</td>
												</tr>
											<?php endforeach ;?>
										</table>
									</div>

									<?php else:?>
										<p class="alert alert-warning">No hay Eventos.</p>
										<script>
											Swal.fire({
														icon: 'error',
														title: 'Oops...',
														text: 'Something went wrong!',
														footer: '<a href="">Why do I have this issue?</a>'
														});
                                        </script>
										</script>
									<?php endif;?>
								</div>
							</div>

						</div>
					</div>
</div>
</section>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="new"):?>
    <section class="content">
      <div class="container-fluid">
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Nuevo Evento</h1>
									<a href="./?view=eventos&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" action="./?action=eventos&opt=add">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre del Evento</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Ingresa el Evento" >
  </div>


  <button type="submit" class="btn btn-primary" onclick="fntAddPersona(1)">Agregar</button>
</form>
								</div>
							</div>

						</div>
					</div>
</div>
</section>

<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = EventosData::getById($_GET["id"]);
	?>
    <section class="content">
      <div class="container-fluid">
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Editar Evento</h1>
									<a href="./?view=eventos&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" action="./?action=eventos&opt=update">
	<input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre del Evento</label>
    <input type="text" name="name" class="form-control" value="<?php echo $con->name; ?>" id="name" placeholder="Ingresa el Evento" required>
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

