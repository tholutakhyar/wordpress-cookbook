<?php
$the_query = new WP_Query( 'posts_per_page=5' ); 
  while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php the_excerpt(__('(more…)')); ?>
    <br/>
<?php
  endwhile;
wp_reset_postdata();
?>
