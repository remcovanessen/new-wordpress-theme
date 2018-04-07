          <div class="blog-post">
<div class="blog-post-dev">
<?php if ( has_post_thumbnail() ) {?>
  <div class="row">
    <div class="col-md-4">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <div class="col-md-6">
      <h3><?php title(); ?></h3> <p class="tags"><?php the_tags(); ?></p>
      <p class="date">last updated: <?php the_modified_date('F j, Y'); ?></p>
     
      <?php the_content(); ?>
    </div>
  </div>
  <?php } else { ?>
    <div class="row">
    <div class="col-md-4">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <div class="col-md-6">
      <h3><?php the_title(); ?></h3> <p class="tags"><?php the_tags(); ?></p>
      <p class="date">last updated: <?php the_modified_date('F j, Y'); ?></p>
      <?php the_content(); ?>
      
    </div>
  </div>
  <?php } ?>


</div><!-- /.blog-post -->
    
          </div><!-- /.blog-post -->

        