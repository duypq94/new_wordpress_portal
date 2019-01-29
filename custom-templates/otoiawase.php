<?php 
	/* 
	Template Name:お問い合わせ
	*/
?>
<?php get_header();?>
<div class="container">
<div id="application-form">
    <h2>お問い合わせ</h2>
    <?php echo do_shortcode('[contact-form-7 id="82" title="お問い合わせ"]'); ?>
    </div>
</div>
<?php get_footer();?>