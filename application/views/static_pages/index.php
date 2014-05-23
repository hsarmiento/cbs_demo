<div class="container">
    <div class="row login_wrap">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading heading_blue">
			    	<h3 class="panel-title">Identificarse</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="<?php echo base_url(); ?>admin/index" method="post" id="login_user_form">
	                    <fieldset>
				    	  	<div class="form-group">
				    	  		<label for="email">Email</label>
				    		    <input class="form-control required"  id="email" name="email" type="text">
				    		</div>
				    		<div class="form-group">
				    			<label for="password">Contraseña</label>
				    			<input class="form-control required"  id="password" name="password" type="password">
				    		</div>
				    		<div class="form-group">
				    			<a href="<?php echo base_url(); ?>users/forgot">Olvide mi contraseña</a>
				    	    </div>
				    		<input class="btn btn-lg btn-success btn-block" type="submit" name="login_user_button" id="login_user_button" value="Ingresar">
				    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>