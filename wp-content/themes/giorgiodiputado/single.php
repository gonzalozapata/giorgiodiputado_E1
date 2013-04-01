<?php get_header(); ?>

	</div>
	<div class="fondogris inthesky">
    <div class="container">
	<!-- Section -->
	<section class="two-thirds column">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<h4 style="text-transform:uppercase;"><?php the_category(); ?></h4>
			<!-- Post Title -->
			<h1 style="text-transform: uppercase; line-height:30px;" class="half-bottom">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /Post Title -->
            <!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('mediana'); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /Post Thumbnail -->
			
			
			<?php the_content(); // Dynamic Content ?>
			
			<br class="clear">
			
			<?php // the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<!-- <p><?php // _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			
			<p><?php // _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p> -->
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<?php /* comments_template(); */ ?>
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /Section -->
    	
<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>