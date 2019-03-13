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
         'after_title' => '</h4>' );
        register_sidebar( $sidebar );
        $sidebar = array(
            'name' => 'Right sidebar',
            'id' => 'right_sidebar_id',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
           );
           register_sidebar( $sidebar );
    }
    add_action( 'after_setup_theme', 'portal_setup' );
endif;
function portal_script(){
    wp_enqueue_style( 'portal-style', get_stylesheet_uri()); // load style vao bien portal-style
    wp_enqueue_script( 'portal-script',get_template_directory_uri() . '/asset/js/index.js',array(), false, true);// de bien cuoi true de load js cuoi file
    wp_enqueue_script( 'menu-script',get_template_directory_uri() . '/asset/js/menu.js',array(), false, true);
    wp_enqueue_script( 'single-script',get_template_directory_uri() . '/asset/js/search.js',array(), false, true);
    if(is_single()){
        wp_enqueue_script( 'single-script',get_template_directory_uri() . '/asset/js/single.js',array(), false, true);
    }
    if ( is_front_page()){
        wp_enqueue_script( 'tab-card-script',get_template_directory_uri() . '/asset/js/tabCard.js',array(), false, true);
    }
    if(is_page_template( 'custom-templates/group.php' )){
        wp_enqueue_script( 'group-script',get_template_directory_uri() . '/asset/js/group-page.js',array(), false, true); 
    }
    if(is_page_template( 'custom-templates/knowledge.php' )){
        wp_enqueue_script( 'knowledge-script',get_template_directory_uri() . '/asset/js/knowledge.js',array(), false, true); 
    }
    if(is_page_template( 'custom-templates/library.php' )){
        wp_enqueue_script( 'library-script',get_template_directory_uri() . '/asset/js/library.js',array(), false, true); 
    }
    if(is_page_template( 'custom-templates/faq.php' )){
        wp_enqueue_script( 'faq-script',get_template_directory_uri() . '/asset/js/faq.js',array(), false, true); 
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
function utf8_truncate( $string, $max_chars = 80, $append = "\xC2\xA0…" )
{
    $string = strip_tags( $string );
    if (strlen( utf8_decode( $string ) ) < $max_chars )
    {
        return $string;
    }
    $string = html_entity_decode( $string, ENT_QUOTES, 'utf-8' );
    $string = trim( $string, "\n\r\t .-;–,—\xC2\xA0" );
    $length = strlen( utf8_decode( $string ) );
    $string = mb_substr( $string, 0, $max_chars, 'utf-8' );
    if ( FALSE === strpos( $string, ' ' ) )
    {
        return $string . $append;
    }
    if ( extension_loaded( 'mbstring' ) )
    {
        $pos   = mb_strrpos( $string, ' ', 'utf-8' );
        $short = mb_substr( $string, 0, $pos, 'utf-8' );
    }
    else
    {
        $words = explode( ' ', $string );
        array_pop( $words );
        $short = implode( ' ', $words );
    }
    return $short . $append;
}
//*********************************
//**Load post by category
//*********************************
function load_post_by_category($cat,$number){ ?>
    <?php $the_query = new WP_Query( array( 'category_name' => $cat ,'posts_per_page' => $number ) ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="link-info">
                <p class="publish-date"><?php echo get_the_date(); ?></p>
                <a href="<?php the_permalink(); ?>" class="link-info-title"><?php the_title(); ?></a>
                <p class="link-info-short-details">
                    <?php echo utf8_truncate(get_the_excerpt());  ?>
                </p>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif;?>
    <?php }
//*********************************
//**Load post by post type
//*********************************
function load_post_by_post_type($post_type,$number){ ?>
    <?php $the_query = new WP_Query( array( 'post_type' => $post_type ,'posts_per_page' => $number ) ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="link-info">
                <p class="publish-date"><?php echo get_the_date(); ?></p>
                <a href="<?php the_permalink(); ?>" class="link-info-title"><?php the_title(); ?></a>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif;?>
    <?php }
//*********************************
//** Add post type to subcribes
//*********************************
function new_post_types($types) {
    $types[] = 'zinzi';
    $types[] = 'soumu';
    $types[] = 'joushisu';
    $types[] = 'keiri';
    $types[] = 'gijutsu';
    return $types;
}
 
add_filter('s2_post_types', 'new_post_types');
//*********************************
//** Add custom type to calendar
//*********************************
 
function ucc_get_calendar( $post_types = '' , $initial = true , $echo = true ) {
  global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;
  if ( empty( $post_types ) || !is_array( $post_types ) ) {
    $args = array(
      'public' => true ,
      '_builtin' => false
    );
    $output = 'names';
    $operator = 'and';
    $post_types = get_post_types( $args , $output , $operator );
    $post_types = array( 'zinzi','soumu','joushisu','keiri','gijutsu','houmu');
  } else {
    $my_post_types = array();
    foreach ( $post_types as $post_type ) {
      if ( post_type_exists( $post_type ) )
        $my_post_types[] = $post_type;
    }
    $post_types = $my_post_types;
  }
  $post_types_key = implode( '' , $post_types );
  $post_types = "'" . implode( "' , '" , $post_types ) . "'";
  $cache = array();
  $key = md5( $m . $monthnum . $year . $post_types_key );
  if ( $cache = wp_cache_get( 'get_calendar' , 'calendar' ) ) {
    if ( is_array( $cache ) && isset( $cache[$key] ) ) {
      remove_filter( 'get_calendar' , 'ucc_get_calendar_filter' );
      $output = apply_filters( 'get_calendar',  $cache[$key] );
      add_filter( 'get_calendar' , 'ucc_get_calendar_filter' );
      if ( $echo ) {
        echo $output;
        return;
      } else {
        return $output;
      }
    }
  }
  if ( !is_array( $cache ) )
    $cache = array();
  if ( !$posts ) {
    $sql = "SELECT 1 as test FROM $wpdb->posts WHERE post_type IN ( $post_types ) AND post_status = 'publish' LIMIT 1";
    $gotsome = $wpdb->get_var( $sql );
    if ( !$gotsome ) {
      $cache[$key] = '';
      wp_cache_set( 'get_calendar' , $cache , 'calendar' );
      return;
    }
  }
  if ( isset( $_GET['w'] ) )
    $w = '' . intval( $_GET['w'] );
  $week_begins = intval( get_option( 'start_of_week' ) );
  if ( !empty( $monthnum ) && !empty( $year ) ) {
    $thismonth = '' . zeroise( intval( $monthnum ) , 2 );
    $thisyear = ''.intval($year);
  } elseif ( !empty( $w ) ) {
    $thisyear = '' . intval( substr( $m , 0 , 4 ) );
    $d = ( ( $w - 1 ) * 7 ) + 6; 
    $thismonth = $wpdb->get_var( "SELECT DATE_FORMAT( ( DATE_ADD( '${thisyear}0101' , INTERVAL $d DAY ) ) , '%m' ) " );
  } elseif ( !empty( $m ) ) {
    $thisyear = '' . intval( substr( $m , 0 , 4 ) );
    if ( strlen( $m ) < 6 )
        $thismonth = '01';
    else
        $thismonth = '' . zeroise( intval( substr( $m , 4 , 2 ) ) , 2 );
  } else {
    $thisyear = gmdate( 'Y' , current_time( 'timestamp' ) );
    $thismonth = gmdate( 'm' , current_time( 'timestamp' ) );
  }
  $unixmonth = mktime( 0 , 0 , 0 , $thismonth , 1 , $thisyear);
  $previous = $wpdb->get_row( "SELECT DISTINCT MONTH( post_date ) AS month , YEAR( post_date ) AS year
    FROM $wpdb->posts
    WHERE post_date < '$thisyear-$thismonth-01'
    AND post_type IN ( $post_types ) AND post_status IN ('publish')
      ORDER BY post_date DESC
      LIMIT 1" );
  $next = $wpdb->get_row( "SELECT DISTINCT MONTH( post_date ) AS month, YEAR( post_date ) AS year
    FROM $wpdb->posts
    WHERE post_date > '$thisyear-$thismonth-01'
    AND MONTH( post_date ) != MONTH( '$thisyear-$thismonth-01' )
    AND post_type IN ( $post_types ) AND post_status IN ('publish')
      ORDER  BY post_date ASC
      LIMIT 1" );
  $calendar_caption = _x( '%1$s %2$s' , 'calendar caption' );
  $calendar_output = '<table id="wp-calendar" summary="' . esc_attr__( 'Calendar' ) . '">
  <caption>' . sprintf( $calendar_caption , $wp_locale->get_month( $thismonth ) , date( 'Y' , $unixmonth ) ) . '</caption>
  <thead>
  <tr>';
  $myweek = array();
  for ( $wdcount = 0 ; $wdcount <= 6 ; $wdcount++ ) {
    $myweek[] = $wp_locale->get_weekday( ( $wdcount + $week_begins ) % 7 );
  }
  foreach ( $myweek as $wd ) {
    $day_name = ( true == $initial ) ? $wp_locale->get_weekday_initial( $wd ) : $wp_locale->get_weekday_abbrev( $wd );
    $wd = esc_attr( $wd );
    $calendar_output .= "\n\t\t<th scope=\"col\" title=\"$wd\">$day_name</th>";
  }
  $calendar_output .= '
  </tr>
  </thead>
  <tfoot>
  <tr>';
  if ( $previous ) {    $calendar_output .= "\n\t\t" . '<td colspan="3" id="prev"><a href="' . get_month_link( $previous->year , $previous->month ) . '" title="' . sprintf( __( 'View posts for %1$s %2$s' ) , $wp_locale->get_month( $previous->month ) , date( 'Y' , mktime( 0 , 0 , 0 , $previous->month , 1 , $previous->year ) ) ) . '">&laquo; ' . $wp_locale->get_month_abbrev( $wp_locale->get_month( $previous->month ) ) . '</a></td>';
  } else {
    $calendar_output .= "\n\t\t" . '<td colspan="3" id="prev" class="pad">&nbsp;</td>';
  }
  $calendar_output .= "\n\t\t" . '<td class="pad">&nbsp;</td>';
  if ( $next ) {    $calendar_output .= "\n\t\t" . '<td colspan="3" id="next"><a href="' . get_month_link( $next->year , $next->month ) . '" title="' . esc_attr( sprintf( __( 'View posts for %1$s %2$s' ) , $wp_locale->get_month( $next->month ) , date( 'Y' , mktime( 0 , 0 , 0 , $next->month , 1 , $next->year ) ) ) ) . '">' . $wp_locale->get_month_abbrev( $wp_locale->get_month( $next->month ) ) . ' &raquo;</a></td>';
  } else {
    $calendar_output .= "\n\t\t" . '<td colspan="3" id="next" class="pad">&nbsp;</td>';
  }
  $calendar_output .= '
  </tr>
  </tfoot>
  <tbody>
  <tr>';
  
  $dayswithposts = $wpdb->get_results( "SELECT DISTINCT DAYOFMONTH( post_date )
    FROM $wpdb->posts WHERE MONTH( post_date ) = '$thismonth'
    AND YEAR( post_date ) = '$thisyear'
    AND post_type IN ( $post_types ) AND post_status IN ('publish','future')", ARRAY_N );
    // AND post_date < '" . current_time( 'mysql' ) . '\'' , ARRAY_N);
  if ( $dayswithposts ) {
    foreach ( (array) $dayswithposts as $daywith ) {
      $daywithpost[] = $daywith[0];
    }
  } else {
    $daywithpost = array();
  }
  if ( strpos( $_SERVER['HTTP_USER_AGENT'] , 'MSIE' ) !== false || stripos( $_SERVER['HTTP_USER_AGENT'] , 'camino' ) !== false || stripos( $_SERVER['HTTP_USER_AGENT'] , 'safari' ) !== false )
    $ak_title_separator = "\n";
  else
    $ak_title_separator = ', ';
  $ak_titles_for_day = array();
  $ak_post_titles = $wpdb->get_results( "SELECT ID, post_title, DAYOFMONTH( post_date ) as dom "
    . "FROM $wpdb->posts "
    . "WHERE YEAR( post_date ) = '$thisyear' "
    . "AND MONTH( post_date ) = '$thismonth' "
    . "AND post_type IN ( $post_types ) AND post_status IN ('publish','future')"
  );
  if ( $ak_post_titles ) {
    foreach ( (array) $ak_post_titles as $ak_post_title ) {
        $post_title = esc_attr( apply_filters( 'the_title' , $ak_post_title->post_title , $ak_post_title->ID ) );
        if ( empty( $ak_titles_for_day['day_' . $ak_post_title->dom] ) )
          $ak_titles_for_day['day_'.$ak_post_title->dom] = '';
        if ( empty( $ak_titles_for_day["$ak_post_title->dom"] ) ) 
          $ak_titles_for_day["$ak_post_title->dom"] = $post_title;
        else
          $ak_titles_for_day["$ak_post_title->dom"] .= $ak_title_separator . $post_title;
    }
  }
  $pad = calendar_week_mod( date( 'w' , $unixmonth ) - $week_begins );
  if ( 0 != $pad )
    $calendar_output .= "\n\t\t" . '<td colspan="' . esc_attr( $pad ) . '" class="pad">&nbsp;</td>';
  $daysinmonth = intval( date( 't' , $unixmonth ) );
  for ( $day = 1 ; $day <= $daysinmonth ; ++$day ) {
    if ( isset( $newrow ) && $newrow )
      $calendar_output .= "\n\t</tr>\n\t<tr>\n\t\t";
    $newrow = false;
    if ( $day == gmdate( 'j' , current_time( 'timestamp' ) ) && $thismonth == gmdate( 'm' , current_time( 'timestamp' ) ) && $thisyear == gmdate( 'Y' , current_time( 'timestamp' ) ) )
      $calendar_output .= '<td id="today">';
    else
      $calendar_output .= '<td>';
    if ( in_array( $day , $daywithpost ) ) // any posts today?
        $calendar_output .= '<a href="' . get_day_link( $thisyear , $thismonth , $day ) . "\" title=\"" . esc_attr( $ak_titles_for_day[$day] ) . "\">$day</a>";
    else
      $calendar_output .= $day;
    $calendar_output .= '</td>';
    if ( 6 == calendar_week_mod( date( 'w' , mktime( 0 , 0 , 0 , $thismonth , $day , $thisyear ) ) - $week_begins ) )
      $newrow = true;
  }
  $pad = 7 - calendar_week_mod( date( 'w' , mktime( 0 , 0 , 0 , $thismonth , $day , $thisyear ) ) - $week_begins );
  if ( $pad != 0 && $pad != 7 )
    $calendar_output .= "\n\t\t" . '<td class="pad" colspan="' . esc_attr( $pad ) . '">&nbsp;</td>';
  $calendar_output .= "\n\t</tr>\n\t</tbody>\n\t</table>";
  $cache[$key] = $calendar_output;
  wp_cache_set( 'get_calendar' , $cache, 'calendar' );
  remove_filter( 'get_calendar' , 'ucc_get_calendar_filter' );
  $output = apply_filters( 'get_calendar',  $calendar_output );
  add_filter( 'get_calendar' , 'ucc_get_calendar_filter' );
  if ( $echo )
    echo $output;
  else
    return $output;
}
function ucc_get_calendar_filter( $content ) {
  $output = ucc_get_calendar( '' , '' , false );
  return $output;
}
add_filter( 'get_calendar' , 'ucc_get_calendar_filter' , 10 , 2 );
//*********************************
//** Add date archive include custoom post type
//*********************************
function custom_post_date_archive($query) {
    if ($query->is_date)
        $query->set( 'post_type', array('post', 'zinzi') );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_date_archive');