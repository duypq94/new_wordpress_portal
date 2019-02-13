<?php get_header(); ?>
<div class="container-fluid main-content">
<div class="container main-page">
	<div class="left-column">
		<div class="card">
		<h1 style="font-size: 30px;">検索結果:<span style="font-style: italic;"><?php echo (get_query_var( 's' )) ?></span> </h1>
		 <?php if( have_posts() ) : while( have_posts()) : the_post(); ?>		
		   <div class="search-result">
                <a href="<?php the_permalink(); ?>" >
                <h3><?php the_title(); ?></h3></a>         
					<p class="publish-information">
                    <?php 	printf( __('<span class = "tag-date-time"><i class="far fa-clock"></i>   %1$s </span>', 'portal'),get_the_date() );

							printf( __('<span class = "tag-author"><i class="fas fa-user"></i>   %1$s </span>', 'portal'),get_the_author() ); ?>
                	</p>
                    <p class="expert-information"><?php echo utf8_truncate(get_the_excerpt());  ?></p>
				
            </div>
		 <?php endwhile; ?>
		 <?php else: ?>
	     <?php get_template_part('content','none'); ?>
		 <?php endif; ?>
		</div>
	</div>
</div>
  
<?php get_footer(); ?>