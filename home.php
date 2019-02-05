<?php get_header(); ?>

<div class="container-fluid main-content">
    <div class="container main-page">
        <div class="left-column">
            <!-- <div class="calendar card"> -->
            <!-- <div class="card-title">
                    <i class="fas fa-calendar-alt"></i>イベントカレンダー
                    
                </div>
                <?php echo do_shortcode( '[MEC id="117"]' );?>
            </div> -->

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
                            $the_query = new WP_Query( array( 'post_type'=> array('soumu','keiri','zinzi','gizyutsu'), 
                                'posts_per_page' => '5',
                                'orderby'=>'date',
                                'ignore_sticky_posts' => 1,) ); ?>
                            <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="link-info">
                                <p class="publish-date">
                                    <?php echo get_the_date(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="link-info-title">
                                    <?php the_title(); ?><span class="link-info-label">
                                        <?php
                                                
                                                $post_type = get_post_type();
                                                if ( $post_type )
                                                {
                                                    $pt = get_post_type_object( $post_type  );
                                                    echo $pt->labels->singular_name;
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
                            <p>
                                <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab" id="id-2">
                        <label for="id-2">総務部</label>
                        <div class="tabBody">
                            <?php load_post_by_post_type('soumu','5'); ?>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab" id="id-3">
                        <label for="id-3">経理部</label>
                        <div class="tabBody">
                            <?php load_post_by_post_type('keiri','5'); ?>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab" id="id-4">
                        <label for="id-4">人事部</label>
                        <div class="tabBody">
                            <?php load_post_by_post_type('zinzi','5'); ?>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab" id="id-5" value="gijutsubu">
                        <label for="id-5">技術部</label>
                        <div class="tabBody">
                            <?php load_post_by_post_type('gizyutsu','5'); ?>
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
                                    <a href="https://s3.kingtime.jp/admin" target="_blank"><img class="connect-logo"
                                            src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/kingoftime-logo.png" /></a>
                                    <a href="https://s3.kingtime.jp/admin" target="_blank">勤務管理を行う（メディアドゥ対象）</a><br>
                                </div>
                                <div class="system-list">
                                    <a href="https://cxg2.i-abs.co.jp/cyberx/login.asp" target="_blank"><img class="connect-logo"
                                            src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/cyberxeed-logo.png" /></a>
                                    <a href="https://cxg2.i-abs.co.jp/cyberx/login.asp" target="_blank">勤務管理を行う（出版デジタル機構対象）</a><br>
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
                                    <a href="https://expense.moneyforward.com/session/new" target="_blank"><img class="connect-logo"
                                            src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/mfcloud-logo.png" /></a>
                                    <a href="https://expense.moneyforward.com/session/new" target="_blank">経費申請を行う</a><br>
                                </div>
                                <div class="system-list">
                                    <a href="https://www.primal-inc.com/product/bizforecast/bc/" target="_blank"><img
                                            class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/bizforecast-logo.png" /></a>
                                    <a href="https://www.primal-inc.com/product/bizforecast/bc/" target="_blank">予算申請を行う</a><br>
                                </div>
                                <div class="system-list">
                                    <a href="https://www.mjs.co.jp/" target="_blank"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/mjs-logo.png" /></a>
                                    <a href="https://www.mjs.co.jp/" target="_blank">資産管理を行う</a><br>
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
                                    <a href="http://xpoint.intra.pubridge.jp/xpoint/login.jsp?domCd=pubridge" target="_blank"><img
                                            class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/xpoint-logo.png" /></a></td>
                                    <a href="http://xpoint.intra.pubridge.jp/xpoint/login.jsp?domCd=pubridge" target="_blank">社内業務手続きを行う</a><br>
                                </div>
                                <div class="system-list">
                                    <a href="http://redmine.intra.pubridge.jp/" target="_blank"><img class="connect-logo"
                                            src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/redmine-logo.png" /></a></td>
                                    <a href="http://redmine.intra.pubridge.jp/" target="_blank">プロジェクト管理を行う</a><br>
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
                        <input type="radio" name="tab-2" id="id-6" value="abc" checked>
                        <label for="id-6">業界ニュース</label>
                        <div class="tabBody">
                            <div id="sidebar-rss">
                                <?php echo do_shortcode(' [wp-rss-aggregator source="530"]'); ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab-2" id="id-7" value="artists">
                        <label for="id-7">毎日新聞</label>
                        <div class="tabBody">
                            <div id="sidebar-rss">
                                <?php echo do_shortcode('[wp-rss-aggregator source="622"]'); ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab-2" id="id-8" value="artists">
                        <label for="id-8">朝日新聞</label>
                        <div class="tabBody">
                            <div id="sidebar-rss">
                                <?php echo do_shortcode(' [wp-rss-aggregator source="573"]'); ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab-2" id="id-9" value="artists">
                        <label for="id-9">共同通信</label>
                        <div class="tabBody">
                            <div id="sidebar-rss">
                                <?php echo do_shortcode(' [wp-rss-aggregator source="579"]'); ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab-2" id="id-10" value="artists">
                        <label for="id-10">47NEWS</label>
                        <div class="tabBody">
                            <div id="sidebar-rss">
                                <?php echo do_shortcode('[wp-rss-aggregator source="580"]'); ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="tab-2" id="id-11" value="artists">
                        <label for="id-11">J-CASTニュース</label>
                        <div class="tabBody">
                            <div id="sidebar-rss">
                                <?php echo do_shortcode('[wp-rss-aggregator source="630"]'); ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="news123 card">
                <div class="card-title">
                    <i class="fas fa-newspaper"></i>ニュース
                </div>
                <div class="naiyo">
                    <div class="tab">
                        <button class="tablinks active" onclick="openCity(event, 'id101')" id="defaultOpen">最近</button>
                        <button class="tablinks" onclick="openCity(event, 'id102')">総務部</button>
                        <button class="tablinks" onclick="openCity(event, 'id103')">経理部</button>
                        <button class="tablinks active" onclick="openCity(event, 'id104')" id="defaultOpen">人事部</button>
                        <button class="tablinks active" onclick="openCity(event, 'id105')" id="defaultOpen">技術部</button>
                    </div>

                    <div id="id101" class="tabcontent">
                        <?php 
                            $the_query = new WP_Query( array( 'post_type'=> array('soumu','keiri','zinzi','gizyutsu'), 
                                'posts_per_page' => '5',
                                'orderby'=>'date',
                                'ignore_sticky_posts' => 1,) ); ?>
                            <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="link-info">
                                <p class="publish-date">
                                    <?php echo get_the_date(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="link-info-title">
                                    <?php the_title(); ?><span class="link-info-label">
                                        <?php
                                                
                                                $post_type = get_post_type();
                                                if ( $post_type )
                                                {
                                                    $pt = get_post_type_object( $post_type  );
                                                    echo $pt->labels->singular_name;
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
                            <p>
                                <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                            </p>
                            <?php endif; ?>
                    </div>

                    <div id="id102" class="tabcontent">
                        <?php load_post_by_post_type('soumu','5'); ?>
                    </div>

                    <div id="id103" class="tabcontent">
                       <?php load_post_by_post_type('keiri','5'); ?>
                    </div>
                    <div id="id104" class="tabcontent">
                         <?php load_post_by_post_type('zinzi','5'); ?>
                    </div>
                    <div id="id105" class="tabcontent">
                        <?php load_post_by_post_type('gizyutsu','5'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-column">
            <?php get_template_part('/includes/side-bar/right-sidebar') ?>
        </div>
    </div>

    <?php get_footer(); ?>