    <?php include_once(ABSPATH.WPINC.'/feed.php');
    $rss = fetch_feed('https://feed43.com/6160676867386544.xml');
    $maxitems = $rss->get_item_quantity(6);
    $rss_items = $rss->get_items(0, $maxitems);
    ?>
    <ul>
    	<?php if ($maxitems == 0) echo '<li>No items.</li>';
    	else
    		foreach ( $rss_items as $item ) : ?>
    			<li>
    				<a href='<?php echo $item->get_permalink(); ?>'
    					title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
    					<?php echo $item->get_title(); ?></a>
    				<?php echo $item->get_description(); ?>
    				</li>
    			<?php endforeach; ?>
    		</ul>