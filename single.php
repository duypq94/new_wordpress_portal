<?php get_header(); ?>
<div class="container-fluid main-content" 
style="background: url(<?php echo get_template_directory_uri()?>/asset/imgs/jumbotron_003.jpg) no-repeat;
background-size: 100% 350px; 
height: 500px;">
<div class="container main-page">
	<div class="left-column">
		<div class="card">
			<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="single-page-title"><?php the_title(); ?></h1> 
				<?php if (is_single() ) : ?>
					<div class="page-tag">
						<?php 

						printf( __('<span class = "tag-date-time"><i class="far fa-clock"></i>   %1$s </span>', 'portal'),get_the_date() );

						printf( __('<span class = "tag-author"><i class="fas fa-user"></i>   %1$s </span>', 'portal'),get_the_author() );

						printf( __('<span class = "tag-folder"><i class="far fa-folder-open"></i>   %1$s </span>', 'portal'),get_the_category_list( ',') );
						?>
					</div>
				<?php endif ?>
				<div class="page-content"><?php the_content(); ?></div>
			<?php endwhile; // end of the loop. ?>
			<div class = "content-footer">
				<?php previous_post_link('%link', '<span><i class="fas fa-angle-double-left"></i>PREVIOUS</span> <p>%title</p>', TRUE);?> 
				<?php next_post_link('%link', '<span>NEXT<i class="fas fa-angle-double-right"></i></span><p>%title</p>', TRUE);?> 
			</div>
		<?php endif; ?>
	</div>
</div>
<div class="right-column">
	<?php get_template_part('/includes/side-bar/right-sidebar') ?>
</div>
</div>    
</div>
<?php get_footer(); ?>