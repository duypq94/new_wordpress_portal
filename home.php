<?php get_header(); ?>
<div class="container-fluid main-content">
    <div class="container main-page">
        <div class="left-column">
            <div class="card card-js">
                <div class="card-title">
                    <i class="fas fa-clipboard"></i>各部署からのお知らせ    
                </div>
                <div class="card-content">
                    <div class="tab">
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id101')" id="defaultOpen-noti">最新</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id102')">総務部</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id103')">人事部</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id104')">経営管理部</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id105')">情報システム部</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id106')">法務部</button>
                        <button class="tablinksNoti tablinks" onclick="openTabNoti(event, 'id107')">技術本部</button>
                    </div>

                    <div id="id101" class="tabcontentNoti tabcontent">
                          <?php 
                            $the_query = new WP_Query( array( 'post_type'=> array('zinzi','soumu','keiri','joushisu','houmu','gijutsu'),
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
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                            <p>
                                <?php esc_html_e( '現在のお知らせがありません。' ); ?>
                            </p>
                            <?php endif; ?>
                    </div>

                    <div id="id102" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('soumu','5'); ?>
                    </div>

                    <div id="id103" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('zinzi','5'); ?>
                    </div> 

                    <div id="id104" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('keiri','5'); ?>
                    </div>

                    <div id="id105" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('joushisu','5'); ?>
                    </div>

                    <div id="id106" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('houmu','5'); ?>
                    </div>
                    <div id="id107" class="tabcontentNoti tabcontent">
                        <?php load_post_by_post_type('gijutsu','5'); ?>
                    </div>
                </div>
            </div>
            <div class= "card card-js">
                <div class="card-title">
                    <i class="fas fa-cogs"></i>社内システム
                </div>
                <div class="card-content">
                    <div class="tab">
                        <button class="tablinksSys" onclick="openTabSys(event, 'sysid101')" id="defaultOpen-sys">依頼</button>
                        <button class="tablinksSys" onclick="openTabSys(event, 'sysid102')" >勤務</button>
                        <button class="tablinksSys" onclick="openTabSys(event, 'sysid103')">管理</button>
                    </div>

                     <div id="sysid101" class="tabcontentSys tabcontent">
                        <div class="link-info">
                            <div class="system-list xpoint">
                                <a href="https://xpoint.mediado.info/xpoint/login.jsp" target="_blank"><img
                                        class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/xpoint-logo.png" /></a>
                                        <div class="xpoint-links">
                                            <a href="https://xpoint.mediado.info/xpoint/login.jsp" target="_blank">社内業務手続きを行う</a>
                                            <a href="https://drive.google.com/file/d/1RTcFSD5pgdgPH7hRazWHxmpJGCisxAYz/view" target="_blank">マニュアルを開く</a>
                                        </div>
                                <br>
                            </div>
                            <div class="system-list redmine">
                                <a href="http://redmine.intra.pubridge.jp/" target="_blank"><img class="connect-logo"
                                        src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/redmine-logo.png" /></a>
                                <a href="http://redmine.intra.pubridge.jp/" target="_blank">プロジェクト管理を行う</a><br>
                            </div>
                        </div>
                    </div>                       
                    <div id="sysid102" class="tabcontentSys tabcontent">
                        <div class="link-info">
                            <div class="system-list">
                                <a href="https://s3.kingtime.jp/admin" target="_blank"><img class="connect-logo"
                                        src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/kingoftime-logo.png" /></a>
                                <a href="https://s3.kingtime.jp/admin" target="_blank">勤務管理を行う（旧MD対象）</a><br>
                            </div>
                            <div class="system-list">
                                <a href="https://cxg2.i-abs.co.jp/cyberx/login.asp" target="_blank"><img class="connect-logo"
                                        src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/cyberxeed-logo.png" /></a>
                                <a href="https://cxg2.i-abs.co.jp/cyberx/login.asp" target="_blank">勤務管理を行う</a><br>
                            </div>
                        </div>
                    </div>   
                    <div id="sysid103" class="tabcontentSys tabcontent">
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
                            <div class="system-list">
                                <a href="https://www.hr-platform.com/platform/Login.do?action=start&provider=0001" target="_blank"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/hr.png" /></a>
                                <a href="https://www.hr-platform.com/platform/Login.do?action=start&provider=0001" target="_blank">労務管理を行う</a><br>
                            </div>
                             <div class="system-list">
                                <a href="https://www2.growassist.hitachi-triplewin.co.jp/htw_kanri-login2192/l000m001.aspx?LoginLanguage=0" target="_blank"><img class="connect-logo" src="<?php echo get_template_directory_uri()?>/asset/imgs/systems/POSITIVE_logo2.png" /></a>
                                <a href="https://www2.growassist.hitachi-triplewin.co.jp/htw_kanri-login2192/l000m001.aspx?LoginLanguage=0" target="_blank">給与管理を行う</a><br>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
            <div class="card card-js">
                <div class="card-title">
                    <i class="fas fa-layer-group"></i>メディアドゥ グループニュース   
                </div>
                <div class="card-content">
                    <div class="tab">
                        <button class="tablinksSNS tablinks" onclick="openTabSNS(event, 'snsid101')" id="defaultOpen-sns">OverDrive Japan</button>
                        <button class="tablinksSNS tablinks" onclick="openTabSNS(event, 'snsid102')">マンガ新聞</button>
                        <button class="tablinksSNS tablinks" onclick="openTabSNS(event, 'snsid103')">flier</button>
                        <button class="tablinksSNS tablinks" onclick="openTabSNS(event, 'snsid104')">MyAnimeList</button>
                        <button class="tablinksSNS tablinks" onclick="openTabSNS(event, 'snsid105')">Tech Do Blog</button>
                    </div>

                    <div id="snsid101" class="tabcontentSNS tabcontent">
                       <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="460"]'); ?>
                        </div>   
                    </div>

                    <div id="snsid102" class="tabcontentSNS tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode('[wp-rss-aggregator source="428"]'); ?>
                        </div>
                    </div>

                    <div id="snsid103" class="tabcontentSNS tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="360"]'); ?>
                        </div>
                    </div>
                    <div id="snsid104" class="tabcontentSNS tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="434"]'); ?>
                        </div>
                    </div>
                    <div id="snsid105" class="tabcontentSNS tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="416"]'); ?>
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
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid101')" id="defaultOpen-news">業界ニュース</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid102')">毎日新聞</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid103')">朝日新聞</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid104')">共同通信</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid105')">47ニュース</button>
                        <button class="tablinksNews tablinks" onclick="openTabNews(event, 'newsid106')">J-CASTニュース</button>
                    </div>

                    <div id="newsid101" class="tabcontentNews tabcontent">
                       <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="504"]'); ?>
                        </div>   
                    </div>

                    <div id="newsid102" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode('[wp-rss-aggregator source="372"]'); ?>
                        </div>
                    </div>

                    <div id="newsid103" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="410"]'); ?>
                        </div>
                    </div>
                    <div id="newsid104" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode(' [wp-rss-aggregator source="403"]'); ?>
                        </div>
                    </div>
                    <div id="newsid105" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode('[wp-rss-aggregator source="394"]'); ?>
                        </div>
                    </div>
                    <div id="newsid106" class="tabcontentNews tabcontent">
                        <div id="sidebar-rss">
                            <?php echo do_shortcode('[wp-rss-aggregator source="334"]'); ?>
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