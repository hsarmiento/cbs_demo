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
             <a href="<?=base_url()?>users/profile" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?=base_url()?>public/img/bomberos_logo.png">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=" user user-menu">
                            <a href="<?=base_url()?>users/account" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Perfil</span>
                            </a>
                        </li>
                        <li class=" user user-menu">
                            <a href="<?=base_url()?>users/logout" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Cerrar sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
                    <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                        <aside class="left-side sidebar-offcanvas">                
                            <!-- sidebar: style can be found in sidebar.less -->
                            <section class="sidebar">
                                <!-- Sidebar user panel -->
                                <div class="user-panel">
                                    <!-- <div class="pull-left image">
                                        <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    </div> -->
                                    <div class="pull-left info">
                                        <p>Juan Perez</p>

                                        <a href="#"><i class="fa fa-circle text-success"></i> Inspector</a>
                                    </div>
                                </div>
                                <!-- sidebar menu: : style can be found in sidebar.less -->
                                <ul class="sidebar-menu">
                                    <?php 
                                        if((strpos($this->uri->uri_string(),'admin/index')) !== FALSE){ 
                                            $classActive = 'class="active"';
                                        }else{
                                            $classActive = '';
                                        } 
                                    ?>
                                    <li <?=$classActive?>>
                                        <a href="<?=base_url()?>admin/index">
                                            <i class="fa fa-bars"></i> <span>Inicio</span>
                                        </a>
                                    </li>
                                     <?php 
                                        if((strpos($this->uri->uri_string(),'courses/add')) !== FALSE || (strpos($this->uri->uri_string(),'courses/current')) !== FALSE || (strpos($this->uri->uri_string(),'courses/previous')) !== FALSE || (strpos($this->uri->uri_string(),'courses/show')) !== FALSE || (strpos($this->uri->uri_string(),'students/add')) !== FALSE || (strpos($this->uri->uri_string(),'courses/edit_calification')) !== FALSE){ 
                                            $classActive = ' active';
                                        }else{
                                            $classActive = '';
                                        } 
                                    ?>
                                    <li class="treeview <?=$classActive?>">
                                        <a href="#">
                                            <i class="fa fa-book"></i> <span>Cursos</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?=base_url()?>courses/add"><i class="fa fa-angle-double-right"></i>Agregar</a></li>
                                            <li><a href="<?=base_url()?>courses/current"><i class="fa fa-angle-double-right"></i>Actuales</a></li>
                                            <li><a href="<?=base_url()?>courses/previous"><i class="fa fa-angle-double-right"></i>Anteriores</a></li>
                                            <li><a href="<?=base_url()?>courses/future"><i class="fa fa-angle-double-right"></i>Futuros</a></li>
                                        </ul>
                                    </li>
                                     <?php 
                                        if((strpos($this->uri->uri_string(),'invoices/add')) !== FALSE || (strpos($this->uri->uri_string(),'invoices')) !== FALSE){ 
                                            $classActive = ' active';
                                        }else{
                                            $classActive = '';
                                        } 
                                    ?>
                                    <li class="treeview <?=$classActive?>" >
                                        <a href="#">
                                            <i class="fa fa-paste"></i>
                                            <span>Instructores</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?php echo base_url(); ?>invoices/unpaid"><i class="fa fa-angle-double-right"></i> Impagas</a></li>
                                            <li><a href="<?php echo base_url(); ?>invoices/paid"><i class="fa fa-angle-double-right"></i> Pagadas</a></li>
                                            <li><a href="<?php echo base_url(); ?>invoices/add"><i class="fa fa-angle-double-right"></i> Agregar</a></li>
                                        </ul>
                                    </li>
                                    <?php 
                                        if((strpos($this->uri->uri_string(),'reports')) !== FALSE){ 
                                            $classActive = ' active';
                                        }else{
                                            $classActive = '';
                                        } 
                                    ?>
                                    <li class="treeview <?=$classActive?>" >
                                        <a href="#">
                                            <i class="fa fa-paste"></i>
                                            <span>Voluntarios</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?php echo base_url(); ?>reports/monthly"><i class="fa fa-angle-double-right"></i> Recuento mensual</a></li>
                                            <li><a href="<?php echo base_url(); ?>reports/yearly"><i class="fa fa-angle-double-right"></i> Recuperado</a></li>
                                        </ul>
                                    </li>
                                     <?php 
                                        if((strpos($this->uri->uri_string(),'companies/add')) !== FALSE || (strpos($this->uri->uri_string(),'companies/index')) !== FALSE || (strpos($this->uri->uri_string(),'companies/edit')) !== FALSE || (strpos($this->uri->uri_string(),'contacts/add')) !== FALSE || (strpos($this->uri->uri_string(),'contacts/edit')) !== FALSE || (strpos($this->uri->uri_string(),'contacts/index')) !== FALSE){ 
                                            $classActive = ' active';
                                        }else{
                                            $classActive = '';
                                        } 
                                    ?>
                                    <li class="treeview <?=$classActive?>">
                                        <a href="#">
                                            <i class="fa fa-suitcase"></i>
                                            <span>Compañias</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?=base_url()?>companies/add"><i class="fa fa-angle-double-right"></i>Agregar cliente</a></li>
                                            <li><a href="<?=base_url()?>companies/index"><i class="fa fa-angle-double-right"></i>Listado de clientes</a></li>
                                            <li><a href="<?=base_url()?>contacts/add"><i class="fa fa-angle-double-right"></i>Agregar contacto</a></li>
                                            <li><a href="<?=base_url()?>contacts/index"><i class="fa fa-angle-double-right"></i>Listado de contactos</a></li>
                                        </ul>
                                    </li>
                                    <?php 
                                        if((strpos($this->uri->uri_string(),'letter_formats/index')) !== FALSE || (strpos($this->uri->uri_string(),'letter_formats/edit')) !== FALSE ){ 
                                            $classActive = ' active';
                                        }else{
                                            $classActive = '';
                                        } 
                                    ?>
                                    <li class="treeview <?=$classActive?>">
                                        <a href="#">
                                            <i class="fa fa-file-text"></i>
                                            <span>Especialidades</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?php echo base_url(); ?>letter_formats/index"><i class="fa fa-angle-double-right"></i> Ver</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </section>
                            <!-- /.sidebar -->
                        </aside>

                        <!-- Right side column. Contains the navbar and content of the page -->
                        <aside class="right-side">                
                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <h1>
                                    <?php 
                                        if((strpos($this->uri->uri_string(),'admin/index')) !== FALSE){ 
                                            echo 'Inicio'; 
                                     }elseif ((strpos($this->uri->uri_string(),'courses/current')) !== FALSE) {
                                            echo 'Cursos actuales';
                                     }elseif ((strpos($this->uri->uri_string(),'courses/add')) !== FALSE) {
                                            echo 'Agregar curso';
                                     }elseif ((strpos($this->uri->uri_string(),'courses/previous')) !== FALSE) {
                                            echo 'Cursos anteriores';
                                     }elseif ((strpos($this->uri->uri_string(),'courses/show')) !== FALSE) {
                                            echo 'Curso 1';
                                     }elseif ((strpos($this->uri->uri_string(),'students/add')) !== FALSE) {
                                            echo 'Curso 1';
                                     }elseif ((strpos($this->uri->uri_string(),'courses/edit_calification')) !== FALSE) {
                                            echo 'Ingresar calificaciones';
                                     }elseif ((strpos($this->uri->uri_string(),'letters/preview')) !== FALSE) {
                                            echo 'Ver documento';
                                     }elseif ((strpos($this->uri->uri_string(),'letters/edit')) !== FALSE) {
                                            echo 'Editar documento';
                                     }elseif ((strpos($this->uri->uri_string(),'emails/preview')) !== FALSE) {
                                            echo 'Ver email';
                                     }elseif ((strpos($this->uri->uri_string(),'emails/edit')) !== FALSE) {
                                            echo 'Editar email';
                                     }elseif ((strpos($this->uri->uri_string(),'users/edit')) !== FALSE) {
                                            echo 'Editar cuenta';
                                     }elseif ((strpos($this->uri->uri_string(),'users/account')) !== FALSE) {
                                            echo 'Datos personales';
                                     }elseif ((strpos($this->uri->uri_string(),'invoices/add')) !== FALSE) {
                                            echo 'Agregar factura';
                                     }elseif ((strpos($this->uri->uri_string(),'companies/add')) !== FALSE) {
                                            echo 'Agregar cliente';
                                     }elseif ((strpos($this->uri->uri_string(),'companies/edit')) !== FALSE) {
                                            echo 'Editar cliente';
                                     }elseif ((strpos($this->uri->uri_string(),'contacts/add')) !== FALSE) {
                                            echo 'Agregar contacto';
                                     }elseif ((strpos($this->uri->uri_string(),'contacts/index')) !== FALSE) {
                                            echo 'Listado de contactos';
                                     }elseif ((strpos($this->uri->uri_string(),'contacts/edit')) !== FALSE) {
                                            echo 'Editar contacto';
                                     }elseif ((strpos($this->uri->uri_string(),'letter_formats/index')) !== FALSE) {
                                            echo 'Ver formato de cartas';
                                     }elseif ((strpos($this->uri->uri_string(),'letter_formats/edit')) !== FALSE) {
                                            echo 'Editar formato de cartas';
                                     }elseif ((strpos($this->uri->uri_string(),'email_formats/index')) !== FALSE) {
                                            echo 'Ver formato de email';
                                     }elseif ((strpos($this->uri->uri_string(),'email_formats/edit')) !== FALSE) {
                                            echo 'Editar formato de email';
                                     }elseif ((strpos($this->uri->uri_string(),'credentials/edit')) !== FALSE) {
                                            echo 'Editar credenciales';
                                     }elseif ((strpos($this->uri->uri_string(),'reports/monthly')) !== FALSE) {
                                            echo 'Recuento mensual';
                                     }elseif ((strpos($this->uri->uri_string(),'reports/yearly')) !== FALSE) {
                                            echo 'Recuperado';
                                     }?>


                                    <small>Panel de control</small>
                                </h1>
                            </section>

                            <!-- Main content -->
                            <section class="content">
                               <?=$content_for_layout?> 

                            </section><!-- /.content -->
                        </aside><!-- /.right-side -->
                    </div><!-- ./wrapper -->
        <footer>
        </footer>
    </body>
</html>