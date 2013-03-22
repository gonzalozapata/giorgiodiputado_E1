<?php get_header() ?>

        <div class="twelve columns add-bottom" id="slider">
        	Slider GJ
        </div>
        <div class="one-third column add-bottom fondorojo contenidofijo" id="caja1"><img class="estatica" src="<?php echo get_template_directory_uri(); ?>/img/actualizadomicilio.png" alt="Actualiza  tu domicilio"></div>
        <div class="one-third column add-bottom fondoazul contenidofijo" id="caja2">
        <img class="estatica" src="<?php echo get_template_directory_uri(); ?>/img/infoyvoluntarios.png" alt="¿Quieres información? ¿Quieres ser voluntario?"></div>
        <div class="one-third column add-bottom fondoamarillo contenidofijo" id="caja3"><img class="estatica" src="<?php echo get_template_directory_uri(); ?>/img/dialogosciudadanos.png"></div>
        
		<?php
			global $post;
			$args = array( 'numberposts' => 1, 'category_name' => 'litora-inceptos-cubilia' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>

			<?php // C�digo, sacado de un foro, para obtener la URL de mi post thumbnail ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'chica' );
			$url = $thumb['0']; ?>

        <div class="one-third column add-bottom fondoazul" id="enterreno" style="background-image:URL('<?=$url?>');">
        <div class="capatransparente">
        <img class="titulo" src="<?php echo get_template_directory_uri(); ?>/img/enterreno.png">
            <a href="<?php the_permalink(); ?>">
				<h3 class="titular"><?php the_title(); ?></h3>
				<?php /* the_excerpt(); */ ?>
			</a>
        	<a href="https://www.facebook.com/giorgiodiputado/photos_albums" target="_blank"><img class="linkA" src="<?php echo get_template_directory_uri(); ?>/img/boton_enterreno.png"></a>
        </div>
        </div>
		<?php endforeach; ?>
        
		<?php
			global $post;
			$args = array( 'numberposts' => 1, 'category_name' => 'nullam' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>

			<?php // C�digo, sacado de un foro, para obtener la URL de mi post thumbnail ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'chica' );
			$url = $thumb['0']; ?>

        <div class="one-third column add-bottom fondoazul" id="noticias" style="background-image:URL('<?=$url?>');">
        <div class="capatransparente">
        <img class="titulo" src="<?php echo get_template_directory_uri(); ?>/img/noticias.png">
            <a href="<?php the_permalink(); ?>">
				<h3 class="titular"><?php the_title(); ?></h3>
				<?php /* the_excerpt(); */ ?>
			</a>
        	<a href="<?php the_permalink(); ?>" target="_blank"><img class="linkB" src="<?php echo get_template_directory_uri(); ?>/img/boton_noticias.png"></a>
        </div>
        </div>
		<?php endforeach; ?>

		<?php
			global $post;
			$args = array( 'numberposts' => 1, 'category_name' => 'agendum' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>

			<?php // C�digo, sacado de un foro, para obtener la URL de mi post thumbnail ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'chica' );
			$url = $thumb['0']; ?>

        <div class="one-third column add-bottom fondoverde" id="agenda">
        <div style="position:absolute; left:0px; width:150px; height:100%;">
        <img class="titulo" src="<?php echo get_template_directory_uri(); ?>/img/agenda.png">
            <a class="titularagenda" href="<?php the_permalink(); ?>">
				<h1 class="numerogigante">20</h1>
                <h4 style="text-align:center; padding-top:5px;" class="add-bottom">septiembre</h4>
                <h3 style="font-weight:bold;"><?php the_title(); ?></h4>
				<?php /* the_excerpt(); */ ?>
			</a>
        	<!-- <a href="<?php the_permalink(); ?>" target="_blank"><img class="linkB" src="<?php echo get_template_directory_uri(); ?>/img/boton_noticias.png"></a> -->
        </div>
        <div style="position:absolute; right:0px; width:150px; height:100%; background-image:URL('<?=$url?>'); background-position:center;"></div>
        </div>
		<?php endforeach; ?>

    </div>


<?php get_footer(); ?>