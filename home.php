<?php get_header(); ?>

<div class="container-fluid main-content">
    <div class="container main-page">
        <div class="left-column">
            <div class="calendar card">
                <div class="card-title">
                    <i class="fas fa-calendar-alt"></i>Calendar
                    
                </div>
                <?php echo do_shortcode( '[MEC id="1828"]' );?>
            </div>

            <div class="noti tab-card card">
                <div class="card-title">
                    <i class="fas fa-clipboard"></i>各部署のお知らせ
                </div>
                <ul class="tabs">
                    <li>
                        <input type="radio" name="tab" id="id-1" checked>
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
                                            <a href="<?php the_permalink(); ?>" class="link-info-title"><?php the_title(); ?><span class="link-info-label">
                                                <?php
                                                foreach((get_the_category()) as $category) { 
                                                    echo $category->cat_name . ' '; 
                                                } 
                                                ?>
                                            </span></a>
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
                                <input type="radio" name="tab" id="id-2">
                                <label for="id-2">総務部</label>
                                <div class="tabBody">
                                    <?php load_post_by_category('soumubu','3'); ?>
                                </div>
                            </li>
                            <li>
                                <input type="radio" name="tab" id="id-3">
                                <label for="id-3">経理部</label>
                                <div class="tabBody">
                                    <?php load_post_by_category('keiribu','3'); ?>
                                </div>
                            </li>
                            <li>
                                <input type="radio" name="tab" id="id-4">
                                <label for="id-4">人事部</label>
                                <div class="tabBody">
                                    <?php load_post_by_category('jinjibu','3'); ?>
                                </div>
                            </li>
                            <li>
                                <input type="radio" name="tab" id="id-5" value="gijutsubu">
                                <label for="id-5">技術部</label>
                                <div class="tabBody">
                                    <?php load_post_by_category('gijutsubu','3'); ?>
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
                                            <img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/KingOfTime.jpg" />
                                            <a href="https://s3.kingtime.jp/admin">勤務管理を行う（メディアドゥ対象）</a><br>
                                        </div>
                                        <div class="system-list">
                                            <img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/CyberXeed.jpeg" />
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
                                         <img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/MFcloud.png" />
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
                <?php get_template_part('/includes/side-bar/right-sidebar') ?>
            </div>
        </div>

        <?php get_footer(); ?>
