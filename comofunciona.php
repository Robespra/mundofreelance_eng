<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MF - Cómo funciona</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!-- LESS -->
        <link rel="stylesheet/less" href="less/main.less">
        <script src="js/less-1.3.3.min.js"></script>
                <!-- END LESS -->

		<!-- Display compability for iOS Devices -->
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="blacktranslucent"/>
		<!-- END Display compability for iOS Devices -->
		<!-- icon for iOS Devices -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png"/>
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-iconiphone4.png"/>
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-iconipad.png" />
		<link rel="apple-touch-startup-image" href="images/splash-screen-320x460.png"/>
		<link rel="apple-touch-startup-image" sizes="1024x748" href="images/splash-screen-1024x748.png" />
		<link rel="apple-touch-startup-image" sizes="768x1004" href="images/splash-screen-768x1004.png" />
		<link rel="apple-touch-startup-image" sizes="640x960" href="images/splash-screen-640x960.png" />
    </head>
    <body>
    <h1 class='hide-text'>mundofreelance</h1>
    <div class="successtop">
<?php  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success text-center\">".$_GET['s']."</div>";   
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";?>  </div>     
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
<div class="fullimg">  
  <div class="container">
     <div class="navbartop">
       <div class="logo text-center">
 <a href="http://www.mundofreelance.com"> 
            <img src="img/MF_SOLO.svg"></img>
</div></a>
        <div class="navbar pull-left">
          <ul class="nav">
            <li><a href="#"><i class="icon-lock icon-white"></i> Movil ?</a></li>
                  
          </ul>
        </div>
                        
        <div class="navbar pull-right">
          <ul class="nav">
            <li> <a href="#about"><i class="icon-lock"></i> Como funciona?</a></li>
            <li><div class="btn-group"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Spanish<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#about"><i class="icon-lock"></i> funciona ?</a></li></li></ul>
          <div class="clear"></div>
           <li><a href="#about"><i class="icon-lock"></i> Conectarse</a></li>
           <button type="submit" class="btn btn-success pull-right">INSCRIBIRSE</button>
        </div>      
      </div>      
       
        <ul id="tabs">
           <li class="active"><a href="#tab1">Publica un proyecto</a></li>
          <li><a href="#tab2">Busca trabajo</a> </li></ul>
         </div>
         
</div> <!-- full img open -->
        <div class="container">
          <div class="container-home-small"> 
              <div id="tab1" class="tab_content">
                 <div class="row">
                   <div class="span8">
                    <div class="illustr-left"><img src="img/publica_1.svg"></img>
                      <div class="publica_1"></div>
                    </div>
                    <h2>Tu red de freelancers</h2>
                    <p class="lead">Cuenta con una red de profesionales disponibles con competencias especificas en marketing, contenido y desarrollo web.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                   </div>
                   <div class="span8 margin-left">
                    <div class="illustr-right"><img src="img/publica_2.png"></img></div>
                    <h2>Selección facilitada</h2>
                    <p class="lead">Cansado de tener que revisar 50 cv para un proyecto ? Ahorra tiempo y filtra los resultados precisando
                    el algoritmo de busqueda con los criterios que más te importan. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                   </div>
                   <div class="span8">
                    <div class="illustr-left"><div class="publica_3"></div>
                    </div>
                    <h2>Integración</h2>
                    <p class="lead">El seguimiento de todos los precesos de selección, desde la búsqueda hasta la finalización del proyecto.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                   </div><!-- span7 -->
                               
                 </div><!-- row -->


              </div><!-- tab1 tab_content-->
            

           
            <div id="tab2" class="tab_content">
             <div class="row">
                <div class="span8 margin-left">
                  <div class="illustr-right"><img src="img/trabaja_1.svg"></img></div>
                    <h2>Proyectos de larga duración</h2>
                    <p class="lead">Relajate. En mundofreelance te proponemos proyectos de larga duración.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!-- span7 -->
                <div class="span8">
                   <div class="illustr-left"><img src="img/trabaja_2.svg"></img>
                      <div class="trabaja_2"></div></div>
                    <h2>Mejora tu portfolio</h2>
                    <p class="lead">Añade a tu experiencia profesional colaboraciones con clientes prestigiosos. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
               </div><!-- span7 -->
                <div class="span8 margin-left">
                   <div class="illustr-right"><img src="img/trabaja_3.svg"></img>
                    <div class="trabaja_3"></div></div>
                    <h2>Reputación</h2>
                    <p class="lead">Consigue cada vez mas proyectos acumulando las valoraciones.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!-- span7 -->
                             </div><!-- row -->
            </div><!-- tab2 -->

             <div class="clients">
<img src="img/clients.png"></img>
 </div>
          


        <form method="POST" action="contact-form-submission.php" class="form-inline">  
                       <div class="control-group" id="form">  
                <label class="control-label" for="input2">Email Address</label>  
                <div class="controls">  
                    <input type="text" name="contact_email" id="input2" placeholder="Your email address">  
                </div>  
            </div>  
            
            <div class="form-actions form-inline">  
                <input type="hidden" name="save" value="contact">  
                <button type="submit" class="btn btn-primary">Send</button>  
            </div>  
        </form>  


 <div class="competencias">
 
 </div>

            <footer>
                <div class="footer">
                <div class="logo-footer"> 
                 <a><img src="img/logo_flat.svg"></img></a>
               </br>
               <div class="padding3"></div>
               <ul class="inline text-center">
                 <li><a><img src="img/footer-logo-linkedin.svg"></img></a></li>
                 <li><a><img src="img/footer-logo-google.svg"></img></a></li>
                 <li><a><img src="img/footer-logo-twitter.svg"></img></a></li>
                </ul>
                </div>
                <div class="links-footer">
                <ul class="inline">
  <li><a>Contacto</a></li>
  <li><a>Seguridad</a></li>
                  <li><a>Información legal</a></li>
                  <li><a>Mapa web</a></li>
                  <li><a>Preguntas Frecuentes</a></li>
</ul>
</div>
                  <p class="clear text-center small">&#169;mundofreelance 2013</p>
                                
                                 </div>
            </footer>
</div><!-- container small -->
</div>  
</div> <!-- /container -->
       

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/globaljs.min.js"></script>
        <script src="js/main.js"></script>

      <script>

$(document).ready(function(){
  $('#tabs [div="#tab1"]').tab('show'); 
  $("#tab2").hide();
  $("#tabs li").click(function() {
  $("#tabs li").removeClass('active');
  $(this).addClass("active");
  $(".tab_content").hide();
  var selected_tab = $(this).find("a").attr("href");
  $(selected_tab).fadeIn();
  return false;
    });
});
</script>
<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

    </body>
</html>
