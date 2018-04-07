<?php get_header(); ?>




      <div class="blog-header">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>"><h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

  <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
    
        get_template_part( 'content', get_post_format() );
  
      endwhile;?>

      <nav>
  <ul class="pager">
    <li><?php next_posts_link( 'Previous' ); ?></li>
    <li><?php previous_posts_link( 'Next' ); ?></li>
  </ul>
</nav>

<?php endif; 
      ?>
      <a href="<?php comments_link(); ?>">
  <?php
  printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n(             get_comments_number() ) ); ?>
</a>
     </div><!-- /.blog-main -->



      </div><!-- /.row -->
<?php get_sidebar(); ?>
    </div><!-- /.container -->
<?php get_footer(); ?>