<?php
/*
Template Name: Event
 */
?>
<?php get_header();?>
<div class="container-fluid main-content">
	<div class="container main-page">

		<div class="left-column">
			<div class="card">
				<div class="card-title">
					<i class="fas fa-clipboard"></i>イベントカレンダー
				</div>
				<?php echo do_shortcode('[MEC id="177"]'); ?>
			</div>
		</div>
		<div class="right-column">
			<?php get_template_part('/includes/side-bar/right-sidebar') ?>
		</div>
	</div>
</div>
<?php get_footer();?>
