<div class="row">
	<div class="col-lg-11 col-sm-8 col-xs-12 col-md-11">
		<form class="form-horizontal" role="search" method='post' id="form_find">
		  <div class="form-group">
		  	<label for="user_like" class="col-lg-2 col-sm-8 col-xs-6 col-md-4 control-label label_like">Buscar alumno</label>
		  	<div class="col-lg-4 col-md-5 col-xs-5 col-sm-5">
			    <input type="text" class="form-control" id='company_like' name='company_like' placeholder="nombre o apellido">
	  	  	</div>
	  	  	<div class="col-lg-2 col-md-5 col-xs-5 col-sm-5">
	  	  		<input type="submit" class="btn btn-primary" name="button_find_company" id="button_find_company" value="Ver">
	  	  	</div>
		  </div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-lg-10 col-sm-8 col-xs-12 col-md-11">
		<h4><a href="<?=base_url()?>students/add" >Agregar alumno</a><a href="<?=base_url()?>courses/edit_calification" class="pull-right">Ingresar calificaciones</a></h4>
	</div>
</div>
<div class="row">
	<div class="col-lg-10 col-md-11 col-sm-9 col-xs-12">
		<div class="panel panel-primary" id="panel_result">
		  	<div class="panel-heading" id="heading_result">Se han encontrado 20 alumnos</div>
		  	<div class="table-responsive">
			  	<table class="table table-striped table-hover" id="table_user" name='table_user'>
					<thead>
						<tr>
							<th>Nombre <i class="fa fa-sort"></i></th>
							<th>Rut <i class="fa fa-sort"></i></th>
							<th>Compañia <i class="fa fa-sort"></i></th>
							<th>Nota <i class="fa fa-sort"></i></th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Alumno 1</td>
							<td>1111111-1</td>
							<td>1era compañia</td>
							<td>Pendiente</td>
							<td><ul class="list-inline"><li><a href="#"><i class="fa fa-pencil-square-o fa-2"></i>editar</a></li><li><a href="#"><i class="fa fa-times fa-2"></i>eliminar</a></li></ul></td>
						</tr>
						<tr>
							<td>Alumno 2</td>
							<td>1111111-1</td>
							<td>1era compañia</td>
							<td>Pendiente</td>
							<td><ul class="list-inline"><li><a href="#"><i class="fa fa-pencil-square-o fa-2"></i>editar</a></li><li><a href="#"><i class="fa fa-times fa-2"></i>eliminar</a></li></ul></td>
						</tr>
						<tr>
							<td>Alumno 5</td>
							<td>1111111-1</td>
							<td>1era compañia</td>
							<td>Pendiente</td>
							<td><ul class="list-inline"><li><a href="#"><i class="fa fa-pencil-square-o fa-2"></i>editar</a></li><li><a href="#"><i class="fa fa-times fa-2"></i>eliminar</a></li></ul></td>
						</tr>
						<tr>
							<td>Alumno 5</td>
							<td>1111111-1</td>
							<td>1era compañia</td>
							<td>Pendiente</td>
							<td><ul class="list-inline"><li><a href="#"><i class="fa fa-pencil-square-o fa-2"></i>editar</a></li><li><a href="#"><i class="fa fa-times fa-2"></i>eliminar</a></li></ul></td>
						</tr>
						<tr>
							<td>Alumno 5</td>
							<td>1111111-1</td>
							<td>1era compañia</td>
							<td>Pendiente</td>
							<td><ul class="list-inline"><li><a href="#"><i class="fa fa-pencil-square-o fa-2"></i>editar</a></li><li><a href="#"><i class="fa fa-times fa-2"></i>eliminar</a></li></ul></td>
						</tr>
						<tr>
							<td>Alumno 5</td>
							<td>1111111-1</td>
							<td>1era compañia</td>
							<td>Pendiente</td>
							<td><ul class="list-inline"><li><a href="#"><i class="fa fa-pencil-square-o fa-2"></i>editar</a></li><li><a href="#"><i class="fa fa-times fa-2"></i>eliminar</a></li></ul></td>	
						</tr>
						<tr>
							<td>Alumno 5</td>
							<td>1111111-1</td>
							<td>1era compañia</td>
							<td>Pendiente</td>
							<td><ul class="list-inline"><li><a href="#"><i class="fa fa-pencil-square-o fa-2"></i>editar</a></li><li><a href="#"><i class="fa fa-times fa-2"></i>eliminar</a></li></ul></td>	
						</tr>
						<tr>
							<td>Alumno 5</td>
							<td>1111111-1</td>
							<td>1era compañia</td>
							<td>Pendiente</td>
							<td><ul class="list-inline"><li><a href="#"><i class="fa fa-pencil-square-o fa-2"></i>editar</a></li><li><a href="#"><i class="fa fa-times fa-2"></i>eliminar</a></li></ul></td>	
						</tr>	
					</tbody>	
				</table>	
			</div>
		</div>
	</div>
</div>
<div class="row" id="pagination_table">
	<div class="col-lg-10 col-sm-8 col-xs-12 col-md-10">
		<ul class="pagination">
		  <li><a href="#">&laquo;</a></li>
		  <li class="active"><a href="#">1</a></li>
		  <li><a href="#">2</a></li>
		  <li><a href="#">3</a></li>
		  <li><a href="#">4</a></li>
		  <li><a href="#">5</a></li>
		  <li><a href="#">&raquo;</a></li>
		</ul>
	</div>
</div>