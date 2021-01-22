<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CONOCE_MORELOS</title>
    
 <link rel="stylesheet" type="text/css" href="css\estilos.css">
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
                            <a href="tepozu.php" >TEPOZTLAN</a>
                        </li>
                        <li>
                            <a href="tlayau.php">TLAYACAPAN</a>
                        </li>
                        <li>
                            <a href="oaxtepecu.php">OAXTEPEC</a>
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
                                <a class="nav-link" href="descuentos.php">Descuentos y mas</a>
                           
                             </li>
                                <li>
                            <a href="php/salir.php" class="btn btn-info">CERRAR SESION</a>
                        </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>

 <h2 align="center">HOTELES</h2>
 <p align="center">¡A LA CAMITA!</p>
<div class="container">

      <div class="box">
        <div class="imgBx">
          <img src="img/h.jpg">
        </div>
        <div class="content">
          <h3>HOTEL EL MIYAN</h3>
          <p>PAREJA $800 LA NOCHE</p>
          <p>PAREJA + 2 NIÑOS $1600 EL DIA</p>
          <h3>INCLUYE</h3>
          <p>-Baño con regadera</p>
          <p>-Comedor</p>
          <p>-Alberca</p>
          <p>-Internte y cable tv</p>
          <p>-Cochera</p>
          <p>-Servicio 24hrs</p> <br>
          <div align="right">
          <button class="btn-outline-success"><a href="https://www.google.com/travel/hotels/Morelos/entity/ChcIzfiWtoPL3a5PGgsvZy8xdGZtNl9jcxAB/location?g2lb=2502548%2C4258168%2C4260007%2C4270442%2C4274032%2C4291318%2C4305595%2C4306835%2C4308226%2C4317915%2C4328159%2C4329288%2C4364504%2C4366684%2C4371335%2C4372336%2C4373849%2C4382325%2C4382625%2C4385383%2C4386665%2C4388508%2C4270859%2C4284970%2C4291517%2C4316256%2C4356900&hl=es-419&gl=mx&un=1&q=hoteles%20MORELOS&rp=EPKayMOEwv3aywEQyZrKwPjomZdUEOHTypKL0Pq-8gEQjeHIpMKM6_HEATgBQABIAg&ictx=1&sa=X&utm_campaign=sharing&utm_medium=link&utm_source=htls&hrf=CgUIiCcQACIDTVhOKhYKBwjkDxAFGB4SBwjkDxAFGB8YASgAsAEAWAFoAZoBCRIHTW9yZWxvc6IBFAoJL20vMDFidHd4EgdNb3JlbG9zqgEMCgMItgESAwi5ARgBqgEOCgIIERICCEASAgg4GAGqAQsKAwjhAhICCGMYAaoBCgoCCFASAghMGAGSAQIgAQ">MAPA</a></button>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img src="img/h1.jpg">
        </div>
        <div class="content">
            <h3>HOTEL PARAISO</h3>
          <p>PAREJA $850 LA NOCHE</p>
          <p>PAREJA + 2 NIÑOS $2000 LA NOCHE</p>
          <h3>INCLUYE</h3>
          <p>-Baño con regadera</p>
          <p>-Comedor</p>
          <p>-Alberca</p>
          <p>-Internte y cable tv</p>
          <p>-Cochera</p>
          <p>-Servicio 24hrs</p> <br>
          <div align="right">
          <button class="btn-outline-success"><a href="https://www.google.com/travel/hotels/Morelos/entity/ChcIzfiWtoPL3a5PGgsvZy8xdGZtNl9jcxAB/location?g2lb=2502548%2C4258168%2C4260007%2C4270442%2C4274032%2C4291318%2C4305595%2C4306835%2C4308226%2C4317915%2C4328159%2C4329288%2C4364504%2C4366684%2C4371335%2C4372336%2C4373849%2C4382325%2C4382625%2C4385383%2C4386665%2C4388508%2C4270859%2C4284970%2C4291517%2C4316256%2C4356900&hl=es-419&gl=mx&un=1&q=hoteles%20MORELOS&rp=EPKayMOEwv3aywEQyZrKwPjomZdUEOHTypKL0Pq-8gEQjeHIpMKM6_HEATgBQABIAg&ictx=1&sa=X&utm_campaign=sharing&utm_medium=link&utm_source=htls&hrf=CgUIiCcQACIDTVhOKhYKBwjkDxAFGB4SBwjkDxAFGB8YASgAsAEAWAFoAZoBCRIHTW9yZWxvc6IBFAoJL20vMDFidHd4EgdNb3JlbG9zqgEMCgMItgESAwi5ARgBqgEOCgIIERICCEASAgg4GAGqAQsKAwjhAhICCGMYAaoBCgoCCFASAghMGAGSAQIgAQ">MAPA</a></button>
          </div>
      </div>
      
      </div>
    
 
      <div class="box">
        <div class="imgBx">
          <img src="img/h2.jpg">
        </div>
        <div class="content">
    <h3>HOTEL DUBAI</h3>
          <p>PAREJA $850 LA NOCHE</p>
          <p>PAREJA + 2 NIÑOS $2600 LA NOCHE</p>
          <h3>INCLUYE</h3>
          <p>-Baño con regadera</p>
          <p>-Comedor</p>
          <p>-Alberca</p>
          <p>-Internte y cable tv</p>
          <p>-Cochera</p>
          <p>-Servicio 24hrs</p> <br>
          <div align="right">
          <button class="btn-outline-success"><a href="https://www.google.com/travel/hotels/Morelos/entity/ChoIjeHIpMKM6_HEARoNL2cvMTFmNHd0ZjY3NxAB/location?g2lb=2502548%2C4258168%2C4260007%2C4270442%2C4274032%2C4291318%2C4305595%2C4306835%2C4308226%2C4317915%2C4328159%2C4329288%2C4364504%2C4366684%2C4371335%2C4372336%2C4373849%2C4382325%2C4382625%2C4385383%2C4386665%2C4388508%2C4270859%2C4284970%2C4291517%2C4316256%2C4356900&hl=es-419&gl=mx&un=1&q=hoteles%20MORELOS&rp=EPKayMOEwv3aywEQyZrKwPjomZdUEOHTypKL0Pq-8gEQjeHIpMKM6_HEATgBQABIAg&ictx=1&sa=X&utm_campaign=sharing&utm_medium=link&utm_source=htls&hrf=CgUIiCcQACIDTVhOKhYKBwjkDxAFGB4SBwjkDxAFGB8YASgAsAEAWAFoAZoBCRIHTW9yZWxvc6IBFAoJL20vMDFidHd4EgdNb3JlbG9zqgEMCgMItgESAwi5ARgBqgEOCgIIERICCEASAgg4GAGqAQsKAwjhAhICCGMYAaoBCgoCCFASAghMGAGSAQIgAQ">MAPA</a></button>
          </div>
      </div>

      </div>
   
 

      <div class="box">
        <div class="imgBx">
          <img src="img/h3.jpg">
        </div>

        <div class="content">
        <h3>HOTEL CUAUTLA</h3>
          <p>PAREJA $1600 LA NOCHE</p>
          <p>PAREJA + 2 NIÑOS $2600 LA NOCHE</p>
          <h3>INCLUYE</h3>
          <p>-Baño con regadera</p>
          <p>-Comedor</p>
          <p>-Alberca</p>
          <p>-Internte y cable tv</p>
          <p>-Cochera</p>
          <p>-Servicio 24hrs</p> <br>
          <div align="right">
          <button class="btn-outline-success"><a href="https://www.google.com/maps/dir//HOTEL+CUAUTLA/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x85ce6f1a09f36d71:0x2772cba1647fbbb3?sa=X&ved=2ahUKEwjS9pzi39jpAhVSUK0KHUZbCoYQ9RcwFnoECBQQEA">MAPA</a></button>
          </div>
      
      </div>
    </div>
   




<!--SLIDER BAR DE LAS REDES SOCIALES DE LA PAGINA PARA QUE SEAN CONSULTADOS ES OPCIONAL PEOR ES UN TEMA DE CONTACTO A LOS QUE DESARROLARON LA PAGINA, YA QUE SE PODRIA DAR PUBLICIDAD -->
<div class="social-bar">
    <a href="https://www.facebook.com/Morelos-en-mi-corazon-105306764536433/?modal=admin_todo_tour" class="icon icon-facebook2"  target="_blank"></a>
    <a href="https://www.instagram.com/morelosenmicorazon/" class="icon icon-instagram"  target="_blank"></a>
    <a href="https://www.youtube.com/watch?v=o8JEjYs2Ynw" class="icon icon-youtube"    target="_blank"></a>
    <a href="https://open.spotify.com/playlist/3m03BiBjvZcDytjTo4lUb8?si=L9Wuvg-3TOGCe_TyY0KPlA" class="icon icon-spotify"    target="_blank"></a>
    <a href="https://www.gmail.com/" class="icon icon-mail"       target="_blank"></a>
</div>

            
        
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
