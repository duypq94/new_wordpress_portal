<div class="md-graph card">
    <div class="card-title">
        <i class="fas fa-chart-area"></i>メディアドゥHD株価 (毎日更新)
    </div>

    <div id="kabuka-id"></div>
    <img src="https://dimg.stockweather.co.jp/sw_dimg/swcandlechartwriter.ashx?mkt=01&code=000036780&term=2" alt="">
</div>


<div class="md-book card">
    <div class="card-title">
        <i class="fas fa-book"></i>flier 今日の一冊
    </div>

    <?php include_once(ABSPATH.WPINC.'/feed.php');
	$rss = fetch_feed('https://feed43.com/6160676867386544.xml');
	$maxitems = $rss->get_item_quantity(1);
	$rss_items = $rss->get_items(0, $maxitems);
	?>
    <ul class="flier-books">
        <?php if ($maxitems == 0) echo '<li>No items.</li>';
	    else
	        foreach ( $rss_items as $item ) : ?>
        <li>
            <a class="flier-book-img" href='<?php echo $item->get_permalink();?>'><?php echo $item->get_description()?></a>
            <div class="flier-book-info">
            	<div>
            		    <p class="flier-title" ><?php echo $item->get_title(); ?></p>
                		<p class="flier-date"><?php echo '公開: '.$item->get_date('Y-m-d '); ?></p>
            	</div>
                <a class="flier-link" href='<?php echo $item->get_permalink(); ?>'>もっと見る...</a>
                <a  class="flier-web-link" href='https://www.flierinc.com/'>フライヤーサイト</a>
            </div>

        </li>
        <?php endforeach; ?>
        	
    </ul>
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





<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
axios.get('https://sheets.googleapis.com/v4/spreadsheets/1dfMXh0H62yLDOEUHn4-URUqJ8OfX-uVf8fIsK8J4w3A/values/%E3%82%B7%E3%83%BC%E3%83%881?key=AIzaSyDkR6TabPLmZlRNZUr373gYiXBMYPTD1ds')
  .then(function (response) {
   let newArr = [...response.data.values[1][0]].filter((k)=>{
      return !isNaN(parseInt(k));
    })
    let t = parseInt(newArr.join(''));
    let up  = t - parseInt(response.data.values[1][4]); 
    let isUp = false
    if(up >= 0){
      isUp = true;
    }
    let mess = `<div class = "kurabete">昨日に比べて<span style="color: red;">${up}円&darr;<span></div>`
    if(isUp){
      mess = `<div class = "kurabete">昨日に比べて<span style="color: blue;">>${up}円&uarr;</span></div>`
    }
    document.getElementById("kabuka-id").innerHTML=`
    <div class='kabuka'>
        <div class="kabuka-mai-nichi">
            <div class="kabuka-mai-nichi-info" >
                <p style="font-weight: bold; margin-right: 10px;">株価     </p>
                <p>${response.data.values[1][0]}円</p>
            </div>
            ${mess}
            <div>

            </div>
        </div>
        <div class="kabuka-zika">
            <p style="font-weight: bold; margin-right: 10px;">時価総額 [MV]       </p>
            <p>${response.data.values[2][1]}億円</p>
        </div>
        <div class="kabuka-3">
            <p style="font-weight: bold; margin-right: 10px;">企業価値 [EV]       </p>
            <p>${response.data.values[2][2]}億円</p>
        </div>
    </div>
    `
  })
</script>