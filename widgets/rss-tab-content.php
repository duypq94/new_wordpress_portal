<?php 
add_action('widgets_init','rss_tab');
function rss_tab(){
	register_widget('Rss_Tab');
}

class Rss_Tab extends WP_Widget(){
	public function __construct() {
		$widget_ops = array(
			'description' => __( 'Entries from any RSS' ),
			// 'customize_selective_refresh' => true,
		);
		// $control_ops = array( 'width' => 400, 'height' => 200 );
		parent::__construct( 'rss_tab', __( 'RSS_Tab' ), $widget_ops, $control_ops );
	}

	public function widget( $args, $instance ) {

	}

	public function update( $new_instance, $old_instance ) {
	}


	public function form( $instance ) {
		
	}

}

?>