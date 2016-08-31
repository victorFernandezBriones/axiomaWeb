<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Axioma Ingenieros Consultores">        
        <meta name="author" content="">
        <title>VideoTeledetecci&oacute;n | Axioma Ingenieros Consultores</title>
        <link href="images/LogoAxioma.jpg" rel="SHORTCUT ICON" > 
        <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="wow-js/animations.css" rel="stylesheet">
        <link href="css/cssPageStyle.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/patros.css" >
    </head>
    <body data-spy="scroll">

        <nav id="navBar" class="navbar navbar-inverse navbar-fixed-top ">
            <div class="navContainer">
                <div class="navbar-header">
                    <button id="btnNavbar" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">navegar</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                    
                    <a href="index.html"><img src="images/logoAxiomaOficial.png" alt="company logo" id="logo"/></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right custom-menu">
                        <li><a id="aInicio" href="index.php">Inicio</a></li>
                        <li><a id="aConcecion" href="areas.php">Obras Concesionadas</a></li>
                        <li><a id="aConstruccion" href="construccion.php">Obras de Construcci&oacute;n</a></li>
                        <li><a id="aEstudios" href="estudios.php">Estudios y Proyectos de Ingenier&iacute;a</a></li>
                        <li class="active"><a id="aVideo" href="videoTeledeteccion.php">VideoTeledetecci&oacute;n</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header id="headerVideo">
            <img class="banner" src="images/fotosNuevas/DSCF4161.JPG">
        </header>   

        <div id="divInfoVideo" class="text-justify">
            <section id="video" class="section-padding">            
                <div class="container">
                    <div class="row">
                        <div id="canvasVideo" class="colorAxioma wow animated fadeInUp"></div>
                        <div class="col-md-11 col-sm-11 wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="100ms">
                            <div class="section-item">
                                <i class="fa fa-video-camera"></i>
                                <h2>VideoTeledetecci&oacute;n</h2>
                                <p>Es una innovaci&oacute;n tecnol&oacute;gica que <strong>AXIOMA INGENIEROS CONSULTORES S.A.</strong>, ha implementado exitosamente. La t&eacute;cnica de integrar una video-c&aacute;mara de gran angular, GPS y Od&oacute;metro, permite obtener videos e im&aacute;genes geo-referenciadas, inventarios de infraestructura, informaci&oacute;n en la forma de gr&aacute;ficos y en mapas geogr&aacute;ficos con localizaci&oacute;n de elementos viales, con informaci&oacute;n de fecha, coordenadas, velocidad y altitud. De esta forma es posible obtener y conocer la localizaci&oacute;n y el estado de servicio del inventario vial, niveles de retrorreflectancia de la se&ntilde;alizaci&oacute;n vial, procesos de erosi&oacute;n en terraplenes, estado de conservaci&oacute;n de pavimentos, puentes y estructuras. Facilita enormemente la supervisi&oacute;n, monitoreo y seguimiento del status de mantenimiento del inventario de elementos del camino y la entrega de informaci&oacute;n detallada al cliente. Todo en Tiempo Real. </p>                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-offset-3 wow animated fadeInLeft" data-wow-duration="700ms" data-wow-delay="100ms">
                            <video id="videoIntro" width="500" height="320" controls>
                                <source src="video/video_georuta_20.mp4" type="video/mp4">
                                Your browser does not support the <code>video</code> tag.
                            </video>
                        </div>
                    </div>
                    <div class="row">
                        <div class="section-item col-md-11 col-sm-11 wow animated fadeInLeft"  data-wow-duration="700ms" data-wow-delay="100ms">
                            <p>El v&iacute;deo generado permite obtener un informe de comentarios, el cual entrega informaci&oacute;n de acuerdo a las necesidades espec&iacute;ficas de cada proyecto.</p>
                            <img id="imgInforme" src="images/infoTeledeteccion.jpg" alt="infoTeledeteccion" title="informacion teledeteccion">
                        </div>
                    </div>   

                    <div class="row">
                        <div class="section-item col-xs-12 col-sm-12 col-md-12 wow animated fadeInLeft" data-wow-duration="700ms" data-wow-delay="100ms">
                            <p>A partir de la edici&oacute;n de la informaci&oacute;n aportada por el video georeferenciado es posible generar una cartograf&iacute;a digital con la localizaci&oacute;n de los distintos elementos viales relevantes al proyecto.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-11 col-md-offset-1">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <a href="" data-toggle="modal" data-target="#modalG30" class="linkRutas"><img src="images/teledeteccion/img_ruta_g30.jpg" alt="g30"/></a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <a href="" data-toggle="modal" data-target="#modalG34" class="linkRutas"><img src="images/teledeteccion/img_ruta_g34.jpg" alt="g34"/></a>
                                </div> 
                            </div>
                            <div id="fila2" class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <a href="" data-toggle="modal" data-target="#modalG46" class="linkRutas"><img src="images/teledeteccion/img_ruta_g46.jpg" alt="g46"/></a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <a href="" data-toggle="modal" data-target="#modalG51" class="linkRutas"><img src="images/teledeteccion/img_ruta_g51.jpg" alt="g51"/></a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footerVideo" class="row">
                    <div class="col-md-12">
                        <?php require_once 'footer.php'; ?>
                    </div>
                </div>
            </section>
        </div>
        



        <!--MODALES (VIDEOS) -->   
        <div class="modal fade" id="modalG30" tabindex="-1" role="dialog" aria-labelledby="modalG30">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header colorAxiomaBG">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times blanco"></i></button>
                        <h4 class="modal-title blanco text-center">Ruta G-30</h4>
                    </div>
                    <div class="modal-body">
                        <video width="500" height="330" controls>
                            <source src="video/g30_ruta_web.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                    </div>                   
                </div>
            </div>
        </div>
        <!--G-34 -->
        <div class="modal fade" id="modalG34" tabindex="-1" role="dialog" aria-labelledby="modalG34">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header colorAxiomaBG">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times blanco"></i></button>
                        <h4 class="modal-title blanco text-center">Ruta G-34</h4>
                    </div>
                    <div class="modal-body">
                        <video width="500" height="330" controls>
                            <source src="video/g34_ruta_web.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                    </div>                   
                </div>
            </div>
        </div>

        <!--G-46 -->
        <div class="modal fade" id="modalG46" tabindex="-1" role="dialog" aria-labelledby="modalG46">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header colorAxiomaBG">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times blanco"></i></button>
                        <h4 class="modal-title blanco text-center">Ruta G-46</h4>
                    </div>
                    <div class="modal-body">
                        <video width="500" height="330" controls>
                            <source src="video/g46_ruta_web.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                    </div>                   
                </div>
            </div>
        </div>

        <!--G-46 -->
        <div class="modal fade" id="modalG51" tabindex="-1" role="dialog" aria-labelledby="modalG51">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header colorAxiomaBG">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times blanco"></i></button>
                        <h4 class="modal-title blanco text-center">Ruta G-51</h4>
                    </div>
                    <div class="modal-body">
                        <video width="500" height="330" controls>
                            <source src="video/g51_ruta_web.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                    </div>                   
                </div>
            </div>
        </div>


        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="wow-js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

        <script src="js/jquery.quicksand.js"></script>      

    </body>
</html>
