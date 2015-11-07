<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Renta de Vehiculos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
      <?php
session_start();
if (empty($_SESSION["us"])) {
	session_start();
	session_destroy();
	header("location: ../index.php");
}
else{

}
 ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar nav-principal navbar-fixed-top" role="navigation">


      <div class="container">
        <div class="navbar-header">

          <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
          </button>
          <a class="navbar-brand link-personalizado" href="vistaInicio.php">Proj Renta</a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right nav-1">
              <li><a href="#">Vechículos
                <span class="glyphicon icon-automobile"></span></a></li>
              <li><a href="vistaDescuentos.php">Descuentos
                <span class="glyphicon icon-gift"></span></a></li>
              <li><a href="vistaPaquetes.php">Paquetes
                <span class="glyphicon icon-briefcase"></span></a></li>
              <li><a href="vistaContacto.php">Contactenos
                <span class="glyphicon icon-envelop"></span></a></li>
              <li><a ><?php echo $_SESSION['us'];?>
                <span class="glyphicon icon-user-plus"></span></a></li>
              <li><a href="Cerrarsesion.php">Cerrar Sesion
                <span class="glyphicon icon-users"></span></a></li>
            </ul>

          </div><!--/.navbar-collapse -->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
      <section class="app-principal">
        <div class="container">
          <h1>Proj Renta</h1>
          <p>Renta de vehículos en linea</p>
        <div>

          <!--Modal de Ingreso-->
          <div class="modal fade" id="modelIngreso">
            <div class="modal-dialog">
              <div class="modal-content m">
                  <div class="modal-header">
                    <h4 class="modal-title">Ingresar</h4>
                  </div>
                  <div class="modal-body m">
                    <form action="#" method="POST">
                      <div class="form-group">
                        <label for="user"></label>
                        <input type="text" name="user" placeholder="E-Mail">
                      </div>
                      <div class="form-group">
                        <label for="pass"></label>
                        <input type="password" name="pass" placeholder="Password">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer m">
                    <input type="text" class="btn btn-primary" value="Aceptar" name="acept1">
                    <input type="text" class="btn btn-default" value="Cancelar" name="cancel1" data-dismiss="modal">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="carousel slide" id="miSlider" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#miSlider" data-slide-to="0" class="active"></li>
            <li data-target="#miSlider" data-slide-to="1"></li>
            <li data-target="#miSlider" data-slide-to="2"></li>
            <li data-target="#miSlider" data-slide-to="3"></li>
            <li data-target="#miSlider" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="../img/img1.jpg" alt="Imagen1" class="img2">
            </div>
            <div class="item">
              <img src="../img/img2.jpg" alt="Imagen2" class="img2">
            </div>
            <div class="item">
              <img src="../img/img3.jpg" alt="Imagen3" class="img2">
            </div>
            <div class="item">
              <img src="../img/img4.jpg" alt="Imagen4" class="img2">
            </div>
            <div class="item">
              <img src="../img/img5.jpg" alt="Imagen5" class="img2">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 justificado">
          <h2>Chevrolet Cruze</h2>
          <img src="../img/img1.jpg" alt="" class="img5"/>
          <p>Descubre el Chevrolet Cruze, el carro sedán de parrilla frontal doble y faros alargados que posee toda la tecnología, comodidad y seguridad que necesitas.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Mitsubishi Lancer Evo IX</h2>
          <img src="../img/img2.jpg" alt="" class="img5"/>
          <p>El Mitsubishi Lancer es un automóvil de turismo del segmento C producido por el fabricante japonés Mitsubishi Motors desde el año 1973 hasta 2012</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-12 justificado">
          <h2>Aston Martin DB9</h2>
          <img src="../img/img3.jpg" alt="" class="img5"/>
          <p> El Aston Martin DB9 es un automóvil de gran turismo,usa un motor gasolina V12 de 6.0 litros de cilindrada y 450 CV de potencia máxima</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Koenigsegg Agera</h2>
          <img src="../img/img4.jpg" alt="" class="img5"/>
          <p>El Koenigsegg Agera R es un automóvil superdeportivo creado por la casa automotriz sueca Koenigsegg.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Shelby GT500</h2>
          <img src="../img/img5.jpg" alt="" class="img5"/>
          <p>Este es precisamente el clásico Ford Shelby GT500 con su motor de aluminio V8 de 5.8 litros que genera 662 caballos de fuerza</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-12 justificado">
          <h2>Acura NSX</h2>
          <img src="../img/img6.jpg" alt="" class="img5"/>
          <p>El NSX es un coupé de dos pueras y dos plazas que Acura pondrá a la venta en 2016. Tiene un sistema de impulsión híbrido</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Mitsubishi Lancer Evo X</h2>
          <img src="../img/img7.jpg" alt="" class="img5"/>
          <p>El nuevo Mitsubishi Lancer Evo X presenta un nuevo motor turbo de 300 cv, tracción integral y transmisión automática robotizada.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Lexus IS300H</h2>
          <img src="../img/img8.jpg" alt="" class="img5"/>
          <p>El nuevo IS 300h es el primer Lexus en el que la batería se ha instalado debajo del suelo</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-12 justificado">
          <h2>Opel Astra</h2>
          <img src="../img/img9.jpg" alt="" class="img5"/>
          <p>Con su dinámico y escultural diseño, el Opel Astra 5 puertas lleva más lejos su rotundo éxito</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Porsche Cayman S</h2>
          <img src="../img/img10.jpg" alt="" class="img5"/>
          <p>El Porsche Cayman es un automóvil deportivo de dos asientos con tracción trasera y motor en posición central producido por Porsche AG de Alemania.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>BMW M3</h2>
          <img src="../img/img11.jpg" alt="" class="img5"/>
          <p>El BMW M3 es la versión deportiva del BMW Serie 3, producido por el fabricante de automóviles bávaro BMW.
            El primer M3 fue basado en el serie E30 que se comercializó en el año 1986, y desde entonces cada Serie 3 tuvo su versión M. A finales del 2007 se lanzó el M3 E92, con una potencia estimada en 420 CV. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-12 justificado">
          <h2>Dodge Charger</h2>
          <img src="../img/img12.jpeg" alt="" class="img5"/>
          <p>El Dodge Charger es un automóvil estadounidense producido por la división Dodge de Chrysler. A la fecha, existen muchos y diferentes vehículos de Dodge, en tres diferentes plataformas, conformando la línea Charger. Este nombre es asociado generalmente con un modelo de rendimiento en la gama Dodge, sin embargo, también se ha llevado a un Hatchback. un Sedan y a un Coupe de lujo personal.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Jaguar XF</h2>
          <img src="../img/img13.jpg" alt="" class="img5"/>
          <p>El Jaguar XF es un automóvil de turismo del [[segmento F] del fabricante británico de automóviles Jaguar Cars. Sustituye al Jaguar S-Type, que se dejó de producir en 2007 en el Reino Unido y 2008 en otros mercados. La versión de producción del XF debutó en el Salón del Automóvil de Frankfurt de 2007, y se comenzó a entregar a los clientes en marzo de 2008.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Chevrolet Impala</h2>
          <img src="../img/img14.jpg" alt="" class="img5"/>
          <p>El Chevrolet Impala es un automóvil producido por el fabricante estadounidense Chevrolet desde 1958 para el mercado norteamericano. El primer Impala fue presentado en la exhibición Motorama de la General Motors en 1956. Estas versiones mostraban su nueva línea de vehículos para el año próximo. En 1956 el Motorama Car Show paso por Nueva York, Miami, Los Ángeles, San Francisco, y Boston.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-12 justificado">
          <h2>Honda Civic</h2>
          <img src="../img/img15.jpg" alt="" class="img5"/>
          <p>El Honda Civic es un automóvil del segmento C fabricado por la empresa japonesa Honda Motor Co., Ltd. Después de haber pasado por varios cambios generacionales (actualmente van por la novena), el Civic ha crecido en tamaño, colocándose entre el Honda Fit y el Honda Accord. Todas las versiones hasta el momento poseen un motor delantero transversal de 4 cilindros, tracción delantera y numerosas carrocerías, entre ellas el sedán, coupé, hatchback y Aerodeck.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Nissan Sentra</h2>
          <img src="../img/img16.jpg" alt="" class="img5"/>
          <p>El Nissan Sentra (deriva de Kentron, una palabra en griego que significa centro) («Sunny» en Japón y Panamá; «Tsuru» en México hasta su tercera generación), es un automóvil del segmento C producido por el fabricante japonés de automóviles Nissan desde 1966.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Ford Mustang</h2>
          <img src="../img/img17.jpg" alt="" class="img5"/>
          <p>El Ford Mustang es un muscle car de la casa estadounidense Ford. Se basó inicialmente en la segunda generación del modelo estadounidense Ford Falcon, un vehículo del segmento C.1 Fue introducido al mercado el 17 de abril del 1964.2 El Mustang de 1965 fue el modelo más exitoso desde el Ford A.,3 así mismo Mustang es la tercera saga de Ford más antigua, cuyos modelos han sufrido numerosas transformaciones hasta llegar a la actual sexta generación.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-12 justificado">
          <h2>Infiniti Q50</h2>
          <img src="../img/img18.jpg" alt="" class="img5"/>
          <p>El Infiniti Q50 es el sucesor del Infiniti G para la variante sedán. Se estrenó en el Salón del Automóvil de Detroit de 2013 y se comenzó a vender en el tercer trimestre de ese año. Los motores de gasolina son un cuatro cilindros en línea de 2,0 litros y (214 CV, y un V6 de 3,7 litros y 333 CV. También se ofrece un híbrido eléctrico-gasolina, que eroga 364 CV. En tanto, el Diesel es un cuatro cilindros de 2,2 litros y 170 CV.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Kia Forte</h2>
          <img src="../img/img19.jpg" alt="" class="img5"/>
          <p>El Kia Cerato, Spectra o Forte es un automóvil de turismo del segmento C producido por el fabricante surcoreano Kia Motors desde el año 2004. Es un cinco plazas con motor delantero transversal y tracción delantera, que sustituye al Kia Shuma/Sephia. Algunos de los rivales del Cerato son el Honda Civic, el Nissan Tiida, el Mazda 3, el Mitsubishi Lancer, el Subaru Impreza y el Toyota Corolla.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-12 justificado">
          <h2>Volkswagen Jetta</h2>
          <img src="../img/img20.jpg" alt="" class="img5"/>
          <p>El Volkswagen Jetta es un automóvil del segmento C, producido por el fabricante alemán Volkswagen desde 1979. El Jetta existe en versiones sedán y familiar; es básicamente una variante del Volkswagen Golf, que es un hatchback (aunque algunos familiares han llevado el nombre "Golf Variant").</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>

      </div>

      <hr>

      <footer>
        <p>&copy; BRBJ S.A. de C.V. 2015</p>
      </footer>


      <a href="#miSlider" class="carousel-control left" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a href="#miSlider" class="carousel-control right" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>



    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/main.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
