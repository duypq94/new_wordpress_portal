<?php

 if(! function_exists('portal_setup')): 
        function portal_setup(){

            load_theme_textdomain( 'portal' );

            add_theme_support('automatic-feed-links'); // thêm rss vào thẻ head
            
            add_theme_support('post-thumnails');

            add_theme_support('title-tag');

            register_nav_menu('primary-menu',__('Primary menu','portal'));// khai bao menu primary menu la ten . tham so dau la location

            //side bar
            $sidebar = array('name' => __('Main Sidebar','portal'),
                             'id' => 'main-sidebar',
                             'Description' => __('default sidebar', 'portal'),
                             'class' => 'main-sidebar',
                             'before_title' => '<h4 class="widget-title">',
                             'after_title' => '</h3>' );
            register_sidebar( $sidebar );

        }
        function my_excerpt_length($length) {
            return 20;
        }   
        add_filter('excerpt_length', 'my_excerpt_length');
        add_action( 'after_setup_theme', 'portal_setup' );
    endif;

    function portal_script(){
    wp_enqueue_style( 'portal-style', get_stylesheet_uri()); // load style vao bien portal-style
    wp_enqueue_script( 'portal-script',get_template_directory_uri() . '/asset/js/index.js',array(), false, true);// de bien cuoi true de load js cuoi file

    if(is_single()){
        wp_enqueue_script( 'single-script',get_template_directory_uri() . '/asset/js/single.js',array(), false, true);
    }
 }

 add_action('wp_enqueue_scripts','portal_script');


// Menu function

if(!function_exists('portal_menu')){
    function portal_menu($menu){
        $menu  = array('theme_location' => $menu ,  
        'container' => 'div' ,
        'container_class'=> $menu);
        wp_nav_menu($menu);
    }

}

// split string

function utf8_truncate( $string, $max_chars = 70, $append = "\xC2\xA0…" )
{
    $string = strip_tags( $string );
    $string = html_entity_decode( $string, ENT_QUOTES, 'utf-8' );
    // \xC2\xA0 is the no-break space
    $string = trim( $string, "\n\r\t .-;–,—\xC2\xA0" );
    $length = strlen( utf8_decode( $string ) );

    // Nothing to do.
    if ( $length < $max_chars )
    {
        return $string;
    }

    // mb_substr() is in /wp-includes/compat.php as a fallback if
    // your the current PHP installation doesn’t have it.
    $string = mb_substr( $string, 0, $max_chars, 'utf-8' );

    // No white space. One long word or chinese/korean/japanese text.
    if ( FALSE === strpos( $string, ' ' ) )
    {
        return $string . $append;
    }

    // Avoid breaks within words. Find the last white space.
    if ( extension_loaded( 'mbstring' ) )
    {
        $pos   = mb_strrpos( $string, ' ', 'utf-8' );
        $short = mb_substr( $string, 0, $pos, 'utf-8' );
    }
    else
    {
        // Workaround. May be slow on long strings.
        $words = explode( ' ', $string );
        // Drop the last word.
        array_pop( $words );
        $short = implode( ' ', $words );
    }

    return $short . $append;
}