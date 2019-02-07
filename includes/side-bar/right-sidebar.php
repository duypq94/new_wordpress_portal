<div class="md-book card">
    <div class="card-title">
        <i class="fas fa-chart-area"></i>flier books
    </div>

    <?php include_once(ABSPATH.WPINC.'/feed.php');
	$rss = fetch_feed('https://feed43.com/6160676867386544.xml');
	$maxitems = $rss->get_item_quantity(3);
	$rss_items = $rss->get_items(0, $maxitems);
	?>
	<ul class="flier-books">
	    <?php if ($maxitems == 0) echo '<li>No items.</li>';
	    else
	        foreach ( $rss_items as $item ) : ?>
	    <li> 	
	        <a href='<?php echo $item->get_permalink(); ?>'
	            title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'><?php echo $item->get_description()?></a> 
	            <div class="flier-book-info">
	            	<a href='<?php echo $item->get_permalink(); ?>'><?php echo $item->get_title(); ?></a> 
	            	<p class="flier-date-info" style="
    font-size: 14px;
    margin-top: 20px;"><?php echo '公開日'.$item->get_date('j F Y | g:i a'); ?></p>
	            </div>
	        
	    </li>
	    <?php endforeach; ?>
	</ul>
</div>

<div class="md-graph card">
    <div class="card-title">
        <i class="fas fa-chart-area"></i>メディアドゥHD株価
    </div>

    <img src="https://dimg.stockweather.co.jp/sw_dimg/swdaytimechartwriter.ashx?mkt=01&code=000036780" alt="">
    <img src="https://dimg.stockweather.co.jp/sw_dimg/swcandlechartwriter.ashx?mkt=01&code=000036780&term=2" alt="">
</div>

<div class="card">
    <div class="card-title"><i class="fab fa-facebook-f"></i>FACEBOOK</div>
    <div class="fb-page" data-href="https://www.facebook.com/MediaDo3678/" data-tabs="timeline" data-width="450"
        data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
        data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/MediaDo3678/" class="fb-xfbml-parse-ignore"><a
                href="https://www.facebook.com/MediaDo3678/">株式会社メディアドゥホールディングス</a></blockquote>
    </div>
</div>

<div class="card">
    <div class="card-title"><i class="fas fa-cloud-sun"></i>天気予報</div>
    <a class="weatherwidget-io" href="https://forecast7.com/ja/35d69139d69/tokyo/" data-label_1="TOKYO"
        data-label_2="WEATHER" data-font="ヒラギノ角ゴ Pro W3" data-mode="Current" data-days="3" data-theme="sky">TOKYO
        WEATHER</a>
    <a class="weatherwidget-io" href="https://forecast7.com/ja/35d18136d91/nagoya/" data-label_1="NAGOYA"
        data-label_2="WEATHER" data-font="ヒラギノ角ゴ Pro W3" data-mode="Current" data-days="3" data-theme="sky">NAGOYA
        WEATHER</a>
    <a class="weatherwidget-io" href="https://forecast7.com/ja/34d07134d55/tokushima/" data-label_1="TOKUSHIMA"
        data-label_2="WEATHER" data-font="ヒラギノ角ゴ Pro W3" data-mode="Current" data-days="3" data-theme="sky">TOKUSHIMA
        PREFECTURE WEATHER</a>
    <a class="weatherwidget-io" href="https://forecast7.com/ja/32d72n117d16/san-diego/" data-label_1="SAN DIEGO"
        data-label_2="WEATHER" data-font="ヒラギノ角ゴ Pro W3" data-mode="Current" data-days="3" data-theme="sky">SAN DIEGO
        WEATHER</a>
</div>