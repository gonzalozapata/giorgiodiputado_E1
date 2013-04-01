<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- DNS Prefetch -->
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png">
		
	<!-- CSS + jQuery + JavaScript -->
    
     <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/bootstrap-responsive.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/skeleton/skeleton.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/skeleton/layout.css">
    
	<?php wp_head(); ?>
	<script>
	conditionizr({
		debug      : false,
		scriptSrc  : '<?php echo get_template_directory_uri(); ?>/js/conditionizr/',
		styleSrc   : '<?php echo get_template_directory_uri(); ?>/css/conditionizr/',
		ieLessThan : {active: true, version: '9', scripts: true, styles: true, classes: true, customScript: '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js'},
		chrome     : { scripts: true, styles: true, classes: true, customScript: false },
		safari     : { scripts: true, styles: true, classes: true, customScript: false },
		opera      : { scripts: true, styles: true, classes: true, customScript: false },
		firefox    : { scripts: true, styles: true, classes: true, customScript: false },
		ie10       : { scripts: true, styles: true, classes: true, customScript: false },
		ie9        : { scripts: true, styles: true, classes: true, customScript: false },
		ie8        : { scripts: true, styles: true, classes: true, customScript: false },
		ie7        : { scripts: true, styles: true, classes: true, customScript: false },
		ie6        : { scripts: true, styles: true, classes: true, customScript: false },
		retina     : { scripts: true, styles: true, classes: true, customScript: false },
		mac    : true,
		win    : true,
		x11    : true,
		linux  : true
	});
	</script>
	
    
    <!-- carrusel SOLO PARA HOME -->
    <?php
if ( is_home() ) {
    // This is a homepage
	?>
    <script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.dalevuelta').cycle({
		fx: 'scrollHorz', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		next:   '#sig', 
    	prev:   '#ant',
		timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
	});
});
</script> <?php
} else {
    // This is not a homepage
}
?>
    
</head>
<body <?php body_class(); ?>>


	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
    
         
<div class="container">
<div class="twelve columns">
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">

        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
       </a>
  
        <!-- Be sure to leave the brand out there if you want it shown -->
		<a href="<?php echo home_url(); ?>" class="brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logoGJnuevo.png" alt="Giorgio Jackson" width="180" height="60" style="float:left;"></a>
   
         <!-- Everything you want hidden at 940px or less, place within here -->
         <div class="nav-collapse collapse">
         <!-- .nav, .navbar-search, .navbar-form, etc -->
			<nav class="nav">
				<?php html5blank_nav(); ?>
            </nav>
         </div>


            
		</div>
	</div>
</div>

</div>

<!-- /Header -->
