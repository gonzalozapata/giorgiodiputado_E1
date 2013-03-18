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
	
</head>
<body <?php body_class(); ?>>


	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
    
         
<div class="container">
        <div class="two columns offset-by-one"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logoGJ.png" alt="Giorgio Jackson" width="140" height="47"></a></div>
        <div class="two-thirds column add-bottom" id="menu">
				<nav>
					<?php html5blank_nav(); ?>
				</nav>
        </div>

		<!-- /Header -->