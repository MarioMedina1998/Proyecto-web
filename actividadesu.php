<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CONOCE_MORELOS</title>
    
 <link rel="stylesheet" type="text/css" href="css\tarjetas.css">
 <link rel="stylesheet" type="text/css" href="css\estilo.css">
    <link rel="stylesheet" type="text/css" href="font.css">
    <script src="js/valida.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>CONOCE MORELOS</h3>
            </div>

            <ul class="list-unstyled components">
                <p>OPCIONES</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">PRINCIPAL</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                         <li>
                            <a href="php/salir.php">CERRAR SESION</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="todosu.php">CONOCE TODOS</a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">LUGARES FAVORITOS</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="tepozu.php">TEPOZTLAN</a>
                        </li>
                        <li>
                            <a href="tlayau.php">TLAYACAPAN</a>
                        </li>
                        <li>
                            <a href="#">OAXTEPEC</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="descuentos.php" >DESCUENTOS</a>
                </li>
              
                <li class="active">
                    <a href="#homeSubmenue" data-toggle="collapse" aria-expanded="false">HOSPEDAJE</a>
                    <ul class="collapse list-unstyled" id="homeSubmenue">
                        <li>
                            <a href="cabañasu.php">CABAÑAS</a>
                        </li>
                        <li>
                            <a href="hotelesu.php">HOTELES</a>
                        </li>
                   
                </li>
            </ul>
            </ul>

            
                <li>
                    <a href="https://www.google.com/intl/es-419/gmail/about/" class="article">ENVIAR CORREO</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MENU PRINCIPAL</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="inicio.php">Inicio</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="descuentos.php" >Descuentos y mas</a>
                           
                            </li>
                                <li>
                            <a href="php/salir.php" class="btn btn-info">CERRAR SESION</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>

 <h1 class="title">VIVE TU EXPERIENCIA COMO TU QUIERAS</h1>
 <p align="center">Si ya tienes una cuenta inicia sesion y descubre los grandes descuentos que tenemos para ti</p>
    
       
        
    <div class="container">
       
        <div class="card">
            <img src="img/comida.jpg">
            <h4>¡A COMER!</h4>
            <p>¿No se te antoja una cecina con un guacamole?, que rico ¿no?</p>
            <a href="actividadesu.php">VAMOS</a>
        </div>
        
        <div class="card">
            <img src="img/bar.jpg">
            <h4>¡A BEBER COMO LOS PECES EN EL RIO!</h4>
            <p>Conoce las mejores bebidas, no cae nada mal un mezcal,un pulque y hasta una cervecita</p>
            <a href="#">VAMOS</a>
        </div>
           <div class="card">
            <img src="img/tepoz.jpg">
            <h4>¡HASTA LA CIMA!</h4>
            <p>Logra subir el tepozteco y toma las mejores fotos para tus redes sociales</p>
            <a href="tepoz.php">Leer más</a>
        </div>
        <div class="card">
            <img src="img/six.jpg">
            <h4>¡AL AGUA PATO!</h4>
            <p>El mejor parque de diversiones para toda la familia</p>
            <a href="#">VAMOS</a>
        </div>

        <div class="card">
            <img src="img/bal.jpg">
            <h4>¡AL AGUA PATO OTRA VEZ!</h4>
            <p>Visita los mejores balnearios y sumergete a la aventura</p>
            <a href="#">VAMOS</a>
        </div>
        
        <div class="card">
            <img src="img/bosques.jpg">
            <h4>¡EN EL BOSQUE DE LA CHINA...!</h4>
            <p>Visita nuestros bosques y trata de encontrar a la chinita que se perdio</p>
            <a href="#">VAMOS</a>
        </div>
        
     
        
        <p align="center">QUEREMOS QUE DISFRUTES AL MAXIMO BRINDANDOTE LAS MEJORES OPCIONES PARA TI,CONOCE MORELOS
        </p>
        
    </div>





<!--SLIDER BAR DE LAS REDES SOCIALES DE LA PAGINA PARA QUE SEAN CONSULTADOS ES OPCIONAL PEOR ES UN TEMA DE CONTACTO A LOS QUE DESARROLARON LA PAGINA, YA QUE SE PODRIA DAR PUBLICIDAD -->
<div class="social-bar">
    <a href="https://www.facebook.com/Morelos-en-mi-corazon-105306764536433/?modal=admin_todo_tour" class="icon icon-facebook2"  target="_blank"></a>
    <a href="https://www.instagram.com/morelosenmicorazon/" class="icon icon-instagram"  target="_blank"></a>
    <a href="https://www.youtube.com/watch?v=o8JEjYs2Ynw" class="icon icon-youtube"    target="_blank"></a>
    <a href="https://open.spotify.com/playlist/3m03BiBjvZcDytjTo4lUb8?si=L9Wuvg-3TOGCe_TyY0KPlA" class="icon icon-spotify"    target="_blank"></a>
    <a href="https://www.gmail.com/" class="icon icon-mail"       target="_blank"></a>
</div>

            
            <div class="line"></div>
           
        </div>
    
    

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#dismiss').on('click', function () {
                $('#sidebar').removeClass('active');
            });
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                 $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>
