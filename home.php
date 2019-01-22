<?php get_header(); ?>
    <div class="container-fluid main-content" 
    style="background: url(<?php echo get_template_directory_uri()?>/asset/imgs/jumbotron_003.jpg) no-repeat;
    background-size: 100% 350px; 
    height: auto;">
        <div class="container main-page">
            <div class="left-column">
                <div class="calendar card">
                    <div class="card-title">
                        <i class="fas fa-calendar-alt"></i>Calendar
                    </div>
                </div>

                <div class="noti tab-card card">
                    <div class="card-title">
                        <i class="fas fa-clipboard"></i>各部署のお知らせ
                    </div>
                    <ul class="tabs">
                        <li>
                            <input type="radio" name="tab" id="id-1" value="newest" checked>
                            <label for="id-1">最新</label>
                            <div class="tabBody">
                                <?php 
                                    $the_query = new WP_Query( array( 'post_type'=> 'post', 
                                    'posts_per_page' => '3',
                                    'orderby'=>'date',
                                    'ignore_sticky_posts' => 1,) ); ?>
                                    <?php if ( $the_query->have_posts() ) : ?>
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                            <div class="link-info">
                                            <p class="publish-date"><?php echo get_the_date(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="link-info-title"><?php the_title(); ?><span class="link-info-label">人事部</span></a>
                                             <p class="link-info-short-details">
                                                <?php echo utf8_truncate(get_the_excerpt());  ?>
                                            </p>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php else : ?>
                                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                    <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="tab" id="id-2" value="somubu">
                            <label for="id-2">総務部</label>
                            <div class="tabBody">
                                <?php 
                                    $the_query = new WP_Query( array( 'category_name' => 'soumubu' ,'posts_per_page' => '3') ); ?>
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
                                    <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="tab" id="id-3" value="keiribu">
                            <label for="id-3">経理部</label>
                            <div class="tabBody">
                                <?php 
                                    $the_query = new WP_Query( array( 'category_name' => 'keiribu' ,'posts_per_page' => '3') ); ?>
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
                                    <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="tab" id="id-4" value="jinjibu">
                            <label for="id-4">人事部</label>
                            <div class="tabBody">
                                <?php 
                                    $the_query = new WP_Query( array( 'category_name' => 'jinjibu' ,'posts_per_page' => '3') ); ?>
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
                                    <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="tab" id="id-5" value="gijutsubu">
                            <label for="id-5">技術部</label>
                            <div class="tabBody">
                            <?php 
                                    $the_query = new WP_Query( array( 'category_name' => 'gijutsubu' ,'posts_per_page' => '3') ); ?>
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
                                    <?php endif; ?>
                            </div>
                        </li>

                    </ul>
                </div>

                
                 <div class="system tab-card card">
                    <div class="card-title">
                        <i class="fas fa-cogs"></i>社内システム
                    </div>
                    <ul class="tabs">
                        <li>
                            <input type="radio" name="system-tab" id="timesystem" value="timesystem" checked>
                            <label for="timesystem">勤務</label>
                            <div class="tabBody">
                                <div class="link-info">
                                    <div class="system-list">
                                        <a href="https://s3.kingtime.jp/admin"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/kingoftime-logo.jpg" /></a>
                                        <a href="https://s3.kingtime.jp/admin">勤務管理を行う（メディアドゥ対象）</a><br>
                                    </div>
                                    <div class="system-list">
                                             <a href="https://cxg2.i-abs.co.jp/cyberx/login.asp"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/cyberxeed.jpeg"/></a>
                                             <a href="https://cxg2.i-abs.co.jp/cyberx/login.asp">勤務管理を行う（出版デジタル機構対象）</a><br>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="system-tab" id="manage" value="manage">
                            <label for="manage">管理</label>
                            <div class="tabBody">
                                <div class="link-info">
                                    <div class="system-list">
                                        <a href="#"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/mf-cloud-logo.jpg" /></a>
                                        <a href="#">経費申請を行う</a><br>
                                    </div>
                                    <div class="system-list">
                                        <a href="#"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/biz.png"/></a>
                                        <a href="#">予算申請を行う</a><br>
                                    </div>
                                    <div class="system-list">
                                        <a href="#"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/cyberxeed.jpeg"/></a>
                                        <a href="#">資産管理を行う</a><br>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="system-tab" id="request" value="request">
                            <label for="request">依頼</label>
                            <div class="tabBody">
                                <div class="link-info">
                                    <div class="system-list">
                                        <a href="#"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/xpoint.png" /></a></td>
                                        <a href="#">社内業務手続きを行う</a><br>
                                    </div>
                                    <div class="system-list">             
                                        <a href="#"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/Redmine_logo.png"/></a></td>
                                        <a href="#">プロジェクト管理を行う</a><br>
                                        </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="news tab-card card">
                    <div class="card-title">
                        <i class="fas fa-newspaper"></i>ニュース
                    </div>
                    <ul class="tabs">
                        <li>
                            <input type="radio" name="tab-2" id="id-6" value="playlists1" checked>
                            <label for="id-6">最新</label>
                            <div class="tabBody">
                                <div class="link-info">
                                    <p class="publish-date">2018 12 18</p>
                                    <p class="link-info-title">新人事制度 人事評価 <span class="link-info-label">人事部</span></p>
                                    <p class="link-info-short-details">
                                        新人事制度 人事評価のFAQを下記の通り作成いたしました。
                                        各自、ご確認いただき、人事評価に活用いただきますよう宜しくお願いいたします。
                                    </p>
                                </div>
                                <div class="link-info">
                                    <p class="publish-date">2018 12 18</p>
                                    <p class="link-info-title">新人事制度 人事評価<span class="link-info-label">人事部</span> </p>
                                    <p class="link-info-short-details">
                                        新人事制度 人事評価のFAQを下記の通り作成いたしました。
                                        各自、ご確認いただき、人事評価に活用いただきますよう宜しくお願いいたします。
                                    </p>
                                </div>
                                <div class="link-info">
                                    <p class="publish-date">2018 12 18</p>
                                    <p class="link-info-title">新人事制度 人事評価<span class="link-info-label">人事部</span> </p>
                                    <p class="link-info-short-details">
                                        新人事制度 人事評価のFAQを下記の通り作成いたしました。
                                        各自、ご確認いただき、人事評価に活用いただきますよう宜しくお願いいたします。
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="tab-2" id="id-7" value="artists">
                            <label for="id-7">総務部</label>
                            <div class="tabBody">
                                <div class="link-info">
                                    <p class="publish-date">2018 12 18</p>
                                    <p class="link-info-title">新人事制度 人事評価 </p>
                                    <p class="link-info-short-details">
                                        新人事制度 人事評価のFAQを下記の通り作成いたしました。
                                        各自、ご確認いただき、人事評価に活用いただきますよう宜しくお願いいたします。
                                    </p>
                                </div>
                                <div class="link-info">
                                    <p class="publish-date">2018 12 18</p>
                                    <p class="link-info-title">新人事制度 人事評価 </p>
                                    <p class="link-info-short-details">
                                        新人事制度 人事評価のFAQを下記の通り作成いたしました。
                                        各自、ご確認いただき、人事評価に活用いただきますよう宜しくお願いいたします。
                                    </p>
                                </div>
                                <div class="link-info">
                                    <p class="publish-date">2018 12 18</p>
                                    <p class="link-info-title">新人事制度 人事評価 </p>
                                    <p class="link-info-short-details">
                                        新人事制度 人事評価のFAQを下記の通り作成いたしました。
                                        各自、ご確認いただき、人事評価に活用いただきますよう宜しくお願いいたします。
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="tab-2" id="id-8" value="playlists">
                            <label for="id-8">経理部</label>
                            <div class="tabBody">
                                <p>Lorem ipsum dolor sit amet, duo populo tincidunt sadipscing at, id appetere
                                    suavitate eum. Ei ius movet accommodare, vim ex idque ponderum mandamus. Vis et
                                    legimus luptatum accusamus, sea id audiam appetere. Ne mel zril argumentum, cu est
                                    dicant putant, ad eirmod expetenda has. Nam no quidam regione, solet hendrerit
                                    reprehendunt qui et.</p>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="tab-2" id="id-9" value="albums">
                            <label for="id-9">人事部</label>
                            <div class="tabBody">
                                <p>Populo platonem conclusionemque sit te, duo ad volumus appareat. Ullum dolorum eam
                                    at, ut nam esse graecis inimicus. Ex brute illud mei. Cu tollit explicari laboramus
                                    vis, idque movet dicam ad per.</p>

                                <p>Mei mutat scribentur et, quas choro cum ut. Quot posidonium efficiendi duo at, est
                                    et persius constituto. No modo suavitate vis. An nam case utroque, elitr affert ne
                                    vix.</p>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="tab-2" id="id-10" value="playlists">
                            <label for="id-10">技術部</label>
                            <div class="tabBody">
                                <p>Lorem ipsum dolor sit amet, duo populo tincidunt sadipscing at, id appetere
                                    suavitate eum. Ei ius movet accommodare, vim ex idque ponderum mandamus. Vis et
                                    legimus luptatum accusamus, sea id audiam appetere. Ne mel zril argumentum, cu est
                                    dicant putant, ad eirmod expetenda has. Nam no quidam regione, solet hendrerit
                                    reprehendunt qui et.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="right-column">
                <div class="md-graph card">
                    <div class="card-title">
                        <i class="fas fa-chart-area"></i>メディアドゥHD株価
                    </div>

                    <img src="https://dimg.stockweather.co.jp/sw_dimg/swdaytimechartwriter.ashx?mkt=01&code=000036780"
                        alt="">
                    <img src="https://dimg.stockweather.co.jp/sw_dimg/swcandlechartwriter.ashx?mkt=01&code=000036780&term=2"
                        alt="">
                </div>
                 <div class="card">
                    <div class="card-title"><i class="fab fa-facebook-f"></i>FACEBOOK</div>
                    <div class="fb-page" data-href="https://www.facebook.com/MediaDo3678/" data-tabs="timeline" data-width="330" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MediaDo3678/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MediaDo3678/">株式会社メディアドゥホールディングス</a></blockquote></div>
                </div>

                 <div class="card">
                   <div class="card-title"><i class="fas fa-cloud-sun"></i>天気予報</div>
                   <a class="weatherwidget-io" href="https://forecast7.com/ja/35d69139d69/tokyo/" data-label_1="TOKYO" data-label_2="WEATHER" data-font="ヒラギノ角ゴ Pro W3" data-mode="Current" data-days="3" data-theme="sky" >TOKYO WEATHER</a>
                   <a class="weatherwidget-io" href="https://forecast7.com/ja/35d18136d91/nagoya/" data-label_1="NAGOYA" data-label_2="WEATHER" data-font="ヒラギノ角ゴ Pro W3" data-mode="Current" data-days="3" data-theme="sky" >NAGOYA WEATHER</a>
                   <a class="weatherwidget-io" href="https://forecast7.com/ja/34d07134d56/tokushima-prefecture/" data-label_1="TOKUSHIMA PREFECTURE" data-label_2="WEATHER" data-font="ヒラギノ角ゴ Pro W3" data-mode="Current" data-days="3" data-theme="sky" >TOKUSHIMA PREFECTURE WEATHER</a>
                   <a class="weatherwidget-io" href="https://forecast7.com/ja/32d72n117d16/san-diego/" data-label_1="SAN DIEGO" data-label_2="WEATHER" data-font="ヒラギノ角ゴ Pro W3" data-mode="Current" data-days="3" data-theme="sky" >SAN DIEGO WEATHER</a>
                </div>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
