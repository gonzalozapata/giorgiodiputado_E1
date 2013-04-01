<?php get_header() ?>

        <div class="twelve columns add-bottom" id="slider">
        <div class="navegalo"><a id="ant" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ant.png" /></a> <a id="sig" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/sig.png" /></a></div>
        <div class="dalevuelta">
            <div class="imgdecarrusel" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slider_A.png); background-color:#FCFF9B;">&nbsp;</div>
        	<div class="imgdecarrusel" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slider_B.png); background-color:#E89AB2;">&nbsp;</div>
        	<div class="imgdecarrusel" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slider_C.png); background-color:#85BAD8;">&nbsp;</div>
        	<div class="imgdecarrusel" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slider_D.png); background-color:#AEFFD6;">&nbsp;</div>
        </div>
        </div>
        <div class="one-third column add-bottom fondorojo contenidofijo" id="caja1">
        <a href="<?php echo get_page_link(83); ?>"><img class="estatica" src="<?php echo get_template_directory_uri(); ?>/img/actualizadomicilio.png" alt="Actualiza  tu domicilio"></a></div>
        <div class="one-third column add-bottom fondoazul contenidofijo" id="caja2">
        <a href="<?php echo get_page_link(81); ?>"><img class="estatica" src="<?php echo get_template_directory_uri(); ?>/img/infoyvoluntarios.png" alt="¿Quieres información? ¿Quieres ser voluntario?"></a></div>
        <div class="one-third column add-bottom fondoamarillo contenidofijo" id="caja3">
        <a href="<?php echo get_page_link(78); ?>"><img class="estatica" src="<?php echo get_template_directory_uri(); ?>/img/dialogosciudadanos.png"></a></div>
        
		<?php
			global $post;
			$args = array( 'numberposts' => 1, 'category_name' => 'terreno' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>

			<?php // C�digo, sacado de un foro, para obtener la URL de mi post thumbnail ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'chica' );
			$url = $thumb['0']; ?>

        <div class="one-third column add-bottom fondoazul" id="enterreno" style="background-image:URL('<?=$url?>');">
            <a href="<?php the_permalink(); ?>" class="todoelalto capatransparente">
        <img class="titulo" src="<?php echo get_template_directory_uri(); ?>/img/enterreno.png">
				<h3 class="titular"><?php the_title(); ?></h3>
				<?php /* the_excerpt(); */ ?>
        	<a href="https://www.facebook.com/giorgiodiputado/photos_albums" target="_blank"><img class="linkA" src="<?php echo get_template_directory_uri(); ?>/img/boton_enterreno.png"></a>
			</a>
        </div>
		<?php endforeach; ?>
        
		<?php
			global $post;
			$args = array( 'numberposts' => 1, 'category_name' => 'noticias' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>

			<?php // C�digo, sacado de un foro, para obtener la URL de mi post thumbnail ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'chica' );
			$url = $thumb['0']; ?>

        <div class="one-third column add-bottom fondoazul" id="noticias" style="background-image:URL('<?=$url?>');">
            <a href="<?php the_permalink(); ?>" class="todoelalto capatransparente">
        <img class="titulo" src="<?php echo get_template_directory_uri(); ?>/img/noticias.png">
				<h3 class="titular"><?php the_title(); ?></h3>
				<?php /* the_excerpt(); */ ?>
        	<a href="<?php the_permalink(); ?>" target="_blank"><img class="linkB" src="<?php echo get_template_directory_uri(); ?>/img/boton_noticias.png"></a>
			</a>
        </div>
		<?php endforeach; ?>

		<?php
			global $post;
			$args = array( 'numberposts' => 1, 'category_name' => 'agenda' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>

			<?php // C�digo, sacado de un foro, para obtener la URL de mi post thumbnail ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'chica' );
			$url = $thumb['0']; ?>

        <div class="one-third column add-bottom fondoverde" id="agenda">
        <div style="position:absolute; left:0px; width:150px; height:100%;">
        <img class="titulo" src="<?php echo get_template_directory_uri(); ?>/img/agenda.png">
            <a class="titularagenda" href="<?php the_permalink(); ?>">
				<h1 class="numerogigante"><?php echo get_post_meta(get_the_ID(), 'agenda_dia', true); ?></h1>
                <h4 style="text-align:center; padding-top:5px;" class="half-bottom"><?php echo get_post_meta(get_the_ID(), 'agenda_mes', true); ?></h4>
                <h3 style="font-weight:bold;"><?php the_title(); ?></h4>
				<?php /* the_excerpt(); */ ?>
			</a>
        	<!-- <a href="<?php the_permalink(); ?>" target="_blank"><img class="linkB" src="<?php echo get_template_directory_uri(); ?>/img/boton_noticias.png"></a> -->
        </div>
        <div style="position:absolute; right:0px; width:120px; height:100%; background-image:URL('<?=$url?>'); background-position:center;"></div>
        </div>
		<?php endforeach; ?>

    </div>


<?php get_footer(); ?>