<div class="container">
    <div class="row login_wrap">
    	<div class="col-md-7 col-md-offset-2">
    		<div class="panel panel-default">
			  	<div class="panel-heading heading_blue">
			    	<h3 class="panel-title">Crear cuenta</h3>
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
	                    			<label for="charge">Cargo</label>
				    				<input type="text" id="charge" name="charge" class="form-control required">                        
				    	  			<span id="email_message"></span>
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="email">Email</label>
				    				<input type="text" name="email" id="email" class="form-control required">                     
				    	  		</div>
				    	  	</div>
				    	  	<div class="row">
	                    		<div class="col-xs-6 col-md-6 ">
	                    			<label for="password">Contraseña</label>
				    				<input type="password" id="password" name="password" class="form-control required">                        
				    	  			<span id="email_message"></span>
				    	  		</div>
                        		<div class="col-xs-6 col-md-6">
                       			 	<label for="new_password">Repetir contraseña</label>
				    				<input type="password" id="new_password" name="new_password" class="form-control required">                     
				    	  		</div>
				    	  	</div>
			    	    	<input type="submit" class="btn btn-lg btn-success btn-block" name="add_user_button" id="add_user_button" value="Registrar">				    		
				    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>