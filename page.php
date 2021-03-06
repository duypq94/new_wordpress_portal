<?php get_header();?>
<div class="container-fluid main-content">
	<div class="container main-page">
		<div class="card" id = "post-<?php the_ID() ?>-page-id">
			<div class="card-title"><?php echo get_the_title(); ?></div>
			<?php if( have_posts() ) : while( have_posts()) : the_post(); ?>
				<?php get_template_part('content',get_post_format()); ?>
			<?php endwhile; ?>
			<?php else: ?>
				<?php get_template_part('content','none'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer();?>
