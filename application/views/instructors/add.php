<div class="container">
	<div class="row login_wrap">
    	<div class="col-md-7 col-md-offset-2">
    		<div class="panel panel-default">
			  	<div class="panel-heading heading_blue">
			    	<h3 class="panel-title">Ingresar</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="<?php echo base_url(); ?>users/create" method="post" id="add_user_form">
	                    <fieldset>
	                    	<div class="row">
	                    		<div class="col-xs-6 col-md-6">
	                    			<label for="names">Nombres</label>
				    	  			<input type="text" id="names" name="names" class="form-control required">                        
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="last_names">Apellidos</label>
				    				<input type="text" id="last_names" name="last_names" class="form-control required">                      
				    	  		</div>
				    	  	</div>
				    	  	<div class="row">
	                    		<div class="col-xs-6 col-md-6 ">
	                    			<label for="charge">Rut</label>
				    				<input type="text" id="charge" name="charge" class="form-control required">                        
				    	  			<span id="email_message"></span>
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="email">Grupo sanguíneo</label>
				    				<input type="text" name="email" id="email" class="form-control required">                     
				    	  		</div>
				    	  	</div>
				    	  	<div class="row">
	                    		<div class="col-xs-6 col-md-6 ">
	                    			<label for="charge">Domicilio</label>
				    				<input type="text" id="charge" name="charge" class="form-control required">                        
				    	  			<span id="email_message"></span>
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="email">Comuna</label>
				    				<input type="text" name="email" id="email" class="form-control required">                     
				    	  		</div>
				    	  	</div>
				    	  	<div class="row">
	                    		<div class="col-xs-6 col-md-6 ">
	                    			<label for="charge">Compañia</label>
				    	  			<select class="form-control">
					                	<option>Compañia 1</option>
					                	<option>Compañia 2</option>
					                	<option>Compañia 3</option>
					                	<option>Compañia 4</option>
					                </select>
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="email">Comuna</label>
                   			 		<select class="form-control">
					                	<option>Comuna 1</option>
					                	<option>Comuna 2</option>
					                	<option>Comuna 3</option>
					                	<option>Comuna 4</option>
					                </select>
				    	  		</div>
				    	  	</div>
				    	  	<div class="row">
	                    		<div class="col-xs-6 col-md-6 ">
	                    			<label for="charge">Fecha ingreso compañia</label>
                    				<div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                    </div><!-- /.input group -->
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="email">Corre electrónico</label>
				    				<input type="text" name="email" id="email" class="form-control required">                     
				    	  		</div>
				    	  	</div>
				    	  	<div class="row">
	                    		<div class="col-xs-6 col-md-6 ">
	                    			<label for="charge">Celular</label>
				    				<input type="text" id="charge" name="charge" class="form-control required">                        
				    	  			<span id="email_message"></span>
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="email">Teléfono fijo</label>
				    				<input type="text" name="email" id="email" class="form-control required">                     
				    	  		</div>
				    	  	</div>
				    	  	<div class="row">
	                    		<div class="col-xs-6 col-md-6 ">
	                    			<label for="charge">Teléfono trabajo</label>
				    				<input type="text" id="charge" name="charge" class="form-control required">                        
				    	  			<span id="email_message"></span>
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="email">Profesión o actividad</label>
				    				<input type="text" name="email" id="email" class="form-control required">                     
				    	  		</div>
				    	  	</div>
				    	  	<div class="row">
	                    		<div class="col-xs-6 col-md-6 ">
	                    			<label for="charge">Curso que dicta</label>
				    	  			<select class="form-control">
					                	<option>Curso 1</option>
					                	<option>Curso 2</option>
					                	<option>Curso 3</option>
					                	<option>Curso 4</option>
					                </select>
					                <a href="#_" class="pull-right">agregar otro</a>
				    	  		</div>

				    	  	</div>
			    	    	<div class="row">
			    	    		<div class="col-xs-6 col-md-6 col-lg-12 ">
					        		<input type="submit" class="btn btn-primary pull-right" name="add_company_button" id="add_company_button" value="Guardar">
			    	    		</div>
			    	    	</div>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>