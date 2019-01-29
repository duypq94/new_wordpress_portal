<?php get_header(); ?>
<div class="container">
	<h1><?php echo get_the_title();  ?></h1>
    <?php if( have_posts() ) : while( have_posts()) : the_post(); ?>
        <?php get_template_part('content',get_post_format()); ?>
    <?php endwhile; ?>
    <?php else: ?>
        <?php get_template_part('content','none'); ?>
    <?php endif; ?>
      
</div>
  

<?php get_footer(); ?>