<?php get_header(); ?>
<div class="container-fluid main-content">
    <div class="container main-page">
        <div class="left-column">
            <div class="card card-js">
                <div class="card-title">
                    <i class="fas fa-clipboard"></i>各部署のお知らせ    
                </div>
                <div class="card-content">
                    <div class="tab">
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id101')" id="defaultOpen-noti">最近</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id102')">総務部</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id103')">経理部</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id104')">人事部</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id105')">技術部</button>
                    </div>

                    <div id="id101" class="tabcontentNoti tabcontent">
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

                    <div id="id102" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('soumu','5'); ?>
                    </div>

                    <div id="id103" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('keiri','5'); ?>
                    </div>
                    <div id="id104" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('zinzi','5'); ?>
                    </div>
                    <div id="id105" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('gizyutsu','5'); ?>
                    </div>
                </div>
            </div>
            <div class= "card card-js">
                <div class="card-title">
                    <i class="fas fa-cogs"></i>社内システム
                </div>
                <div class="card-content">
                    <div class="tab">
                        <button class="tablinksSys" onclick="openTabSys(event, 'sysid101')" id="defaultOpen-sys">勤務</button>
                        <button class="tablinksSys" onclick="openTabSys(event, 'sysid102')">管理</button>
                        <button class="tablinksSys" onclick="openTabSys(event, 'sysid103')">依頼</button>
                    </div>

                    <div id="sysid101" class="tabcontentSys tabcontent">
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
                    <div id="sysid102" class="tabcontentSys tabcontent">
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
                    <div id="sysid103" class="tabcontentSys tabcontent">
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
                </div>
            </div> 

            <div class="card card-js">
                <div class="card-title">
                    <i class="fas fa-newspaper"></i>ニュース  
                </div>
                <div class="card-content">
                    <div class="tab">
                        <button class="tablinksNews tablinks " onclick="openTabNews(event, 'newsid101')" id="defaultOpen-news">業界ニュース</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid102')">毎日新聞</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid103')">朝日新聞</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid104')">共同通信</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid105')">47ニュース</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid106')">J-CASTニュース</button>
                    </div>

                    <div id="newsid101" class="tabcontentNews tabcontent">
                       <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="530"]'); ?>
                        </div>   
                    </div>

                    <div id="newsid102" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode('[wp-rss-aggregator source="622"]'); ?>
                        </div>
                    </div>

                    <div id="newsid103" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="573"]'); ?>
                        </div>
                    </div>
                    <div id="newsid104" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="579"]'); ?>
                        </div>
                    </div>
                    <div id="newsid105" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode('[wp-rss-aggregator source="580"]'); ?>
                        </div>
                    </div>
                    <div id="newsid106" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode('[wp-rss-aggregator source="630"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-column">
            <?php get_template_part('/includes/side-bar/right-sidebar') ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>