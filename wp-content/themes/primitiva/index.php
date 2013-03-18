<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/skeleton.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<?php wp_head(); ?>

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
    
    <div class="container">
        <div class="two columns offset-by-one" id="logo"><img src="images/logoGJ.png" alt="Giorgio Jackson" width="140" height="48"></div>
        <div class="two-thirds column" id="menu">Espacio designado para el menú responsivo.</div>
        <div class="twelve columns add-bottom" id="slider">
        	Slider GJ
        </div>
        <div class="one-third column add-bottom fondorojo contenidofijo" id="caja1"><img class="estatica" src="images/actualizadomicilio.png" alt="Actualiza  tu domicilio"></div>
        <div class="one-third column add-bottom fondoazul contenidofijo" id="caja2">
        <img class="estatica" src="images/infoyvoluntarios.png" alt="¿Quieres información? ¿Quieres ser voluntario?"></div>
        <div class="one-third column add-bottom fondoamarillo contenidofijo" id="caja3"><img class="estatica" src="images/dialogosciudadanos.png"></div>
        <div class="one-third column add-bottom fondoazul" id="caja4">
        <img src="images/enterreno.png"></div>
        <div class="one-third column add-bottom fondoamarillo" id="caja5">
        <img src="images/noticias.png"></div>
        <div class="one-third column add-bottom fondoverde" id="caja6">
        <img src="images/agenda.png"></div>
    </div>
    <div class="fondogris">
    	<div class="container">
        <div class="two-thirds column">
        Hola.</div>
        <div class="one-third column contenidofijo">
          <img src="images/footer.png" alt="Giorgio Jackson, diputado x Stgo Centro" style="margin:20px;"></div>
        <div class="two columns">
        Mapa (col 1)</div>
        <div class="two columns">
        Mapa (col 2))</div>
        <div class="two columns">
        Mapa (col 3)</div>
        <div class="two columns">
        Mapa (col 4)</div>
        <div class="two columns">
        Mapa (col 5)</div>
        <div class="two columns">
        Mapa (col 6)</div>
      </div>
	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>