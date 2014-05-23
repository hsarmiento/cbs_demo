<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->layout->getTitle(); ?></title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
		<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />
		
	    <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery-1.10.2.js"></script>
	    <!--*************auxiliares*****************-->

		<?php echo $this->layout->css; ?>

		<?php echo $this->layout->js; ?>

		<!--**********fin auxiliares*****************-->		
	</head>

	<body>
		<header> 
			 <a href="<?php echo base_url();?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?=base_url()?>public/img/bomberos_logo.png" height="40">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <?php 
                        if($this->session->userdata('user_id') == FALSE){ ?>
                        	<li class=" user user-menu">
                                <a href="<?=base_url()?>" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Identificarse</span>
                                </a>
                            </li>
                            <li class=" user user-menu">
                                <a href="<?=base_url()?>create" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Crear cuenta</span>
                                </a>
                            </li>  
                        <?php }else{ ?>
                            <li class=" user user-menu">
                                <a href="#_" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Salir</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
		</header>

		<?php echo $content_for_layout; ?>

		<footer>
		</footer>
	</body>
</html>