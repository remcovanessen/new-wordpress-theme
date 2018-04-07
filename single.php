


 get_header(); ?>

	<div class="main">
					<div class="skewed-bg">
	<div class="content">
		<h1 class="title"><?php echo get_bloginfo( 'name' );?></h1> 
			<h2 class="text"><?php echo get_bloginfo( 'description' ); ?></h2>
		</div>
		</div>
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
if ( comments_open() || get_comments_number() ) :
	  comments_template();
	endif;

endwhile; endif;
			?>


	<p><?php next_posts_link(); ?></p>
	<p><?php previous_posts_link(); ?></p>

<?php else : ?>

	<h1>Not Found</h1>
	<p>Silly monkey.</p>

<?php endif; wp_reset_query(); ?>



	</div> <!-- /.main -->

<?php get_footer(); ?>