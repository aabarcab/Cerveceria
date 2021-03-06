<!DOCTYPE html>
<?php
    include ('funcionesPHP/Principal.php');
?>
<html lang="en">

<head>

    <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.js"></script>
    <title>Registro Personas - Maison de la Bière</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <img class="img-responsive " src="img/Logo1.png" alt="">
    <div class="address-bar">Maison de la Bière | Costa Rica, 2016 </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Registros<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href = "registroCervezas.html" >Cerveza</a></li>
                            <li><a href = "registroPersonas.html">Persona</a></li>
                            <li><a href = "registroOtros.html">Otros</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Modificaciones<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href = "modificarCervezas.html">Cerveza</a></li>
                            <li><a href = "modificarPersonas.html">Persona</a></li>
                            <li><a href = "modificarOtros.html">Otros</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" href="" class="dropdown-toggle" data-toggle="dropdown">Consultas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href = "ConsultarCerveza.html">Cerveza</a></li>
                            <li><a href = "ConsultarComprador.html">Comprador</a></li>
                            <li><a href = "Estadisticas.html">Estadísticas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Registro
                        <strong>Personas</strong>
                    </h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <hr>
                        <h1 class="intro-text text-left"><strong>Ingrese los datos de la persona</strong>
                        </h1>
                        <hr>
                        <form role="form">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="checkbox">
                                  <label><input type="checkbox" value="" >Empleado</label>
                                </div>
                                
                                <div class="checkbox">
                                  <label><input type="checkbox" value="" >Comprador</label>
                                </div>
                                
                                <div class="form-group col-lg-4">
                                    <label>Nombre</label>
                                    <input name = "nombre" id = "nombre" type="text" required="required" class="form-control">
                                </div>
                                
                                <div class="form-group col-lg-4">
                                    <label>Primer Apellido</label>
                                    <input name = "primerApellido" id = "primerApellido" required="required" type="text" class="form-control">
                                </div>
                                
                                <div class="form-group col-lg-4">
                                    <label>Segundo Apellido</label>
                                    <input name = "segundoApellido" required="required" id = "segundoApellido" type="text" class="form-control">
                                </div>
                                
                                 <div class="form-group col-lg-4">
                                    <label>Cédula</label>
                                    <input name = "cedula"  required="required" id = "cedula" type="text" class="form-control">
                                </div>
                                
                                 <div class="form-group col-lg-4">
                                    <label>Correo</label>
                                    <input name = "correo" required="required" id = "correo" type="email" class="form-control">
                                </div>
                         
                                <div class="form-group col-lg-4">
                                    <label>Pais</label>
                                    <select class = "form-control" onchange = "buscarProvincia()" name="pais" id = "pais">
                                        <option value= "" >Selecionar-País</option>
                                        <?php
                                           obtenerPaises();
                                        ?>
                                    </select>
                                </div>
                                
                                <div class="form-group col-lg-4">
                                    <label>Provincia</label>
                                    <select  onchange = "buscarCanton()" name="provincia" id = "provincia" class="form-control">
                                        <option value="">Selecionar-Provincia</option>

                                   
                                    </select>
                                </div>
                                
                                <div class="form-group col-lg-4">
                                    <label>Cantón</label>
                                    <select onchange = "buscarDistrito()" name="canton" id = "canton" class="form-control">
                                        <option value="">Selecionar-Canton</option>
                                  		
                                    </select>
                                </div>

                                <div class="form-group col-lg-4">
                                    <label>Distrito</label>
                                    <select name="distrito" id = "distrito" required="required" class="form-control">
                                        <option value="">Selecionar-Distrito</option>
                                          
                                    </select>
                                </div>
                                
                                 <div class="form-group col-lg-4">
                                    <label>Dirección exacta</label>
                                    <input type="tel" name = "direccion" id = "direccion"  required="required"class="form-control">
                                </div>
                                
                                <div class="form-group col-lg-4">
                                    <label>Carnet (Empleado):</label>
                                    <input type="tel" id="carnet" class="form-control">
                                </div>
                                 
                                 <div class="form-group col-lg-4">
                                    <label>Pseudónimo (Comprador):</label>
                                    <input type="tel" id="pseudonimo" name = "pseudonimo" class="form-control">
                                </div>
                                
                                <div class="form-group col-lg-4">
                                    <label>Fotografía</label>
                                    <span class="btn btn-default btn-file">
                                        <input id = "fotografia" name = "fotografia" type="file">
                                    </span>
                                </div>
                                
                                <div class="clearfix"></div>

                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" id "save" value="contact">
                                <button type="submit" class="btn btn-default" id = "btnRegistrar" name = "btnRegistrar" onclick= "registrarPersona()" >
                                    Registrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    
   <script src = "js/funcionesJavaScript.js"></script> 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>