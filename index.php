
<?php

/* This is the font page which will kick in automatically. */


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



  </div> <!-- /.main -->

<?php get_footer(); ?>