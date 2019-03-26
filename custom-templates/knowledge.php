<?php 
	/* 
	Template Name: Knowledge
 */
?>
<?php get_header(); ?>
    <div class="container-fluid main-content">
        <div class="container main-page knowledge-page" id="knowledge-page-id">
          <div class= "card card-js">
            <div class="card-title">
				<i class="fas fa-book"></i>&nbsp;ナレッジ
           </div>
           <div class="card-content">
                <div class="tab">
                    <button class="tablinksKnowledgePage" onclick="openTabKnowledgePage(event, 'KnowledgePageId101')" id="defaultOpen-knowledge-page">マニュアル</button>
                    <button class="tablinksKnowledgePage" onclick="openTabKnowledgePage(event, 'KnowledgePageId102')" >ロゴ</button>
                </div>
            <div id="KnowledgePageId101" class="tabcontentKnowledgePage tabcontent">
            &nbsp;  
                <div>
				<h5 class="ul-title">ガイドライン</h5>
				<ul>
					<li><i class="fas fa-chevron-right"></i>ロゴ運用
						<ul>
                    		<li><i class="fas fa-chevron-right"></i><a href="https://drive.google.com/file/d/1PRymOpbE2C14ccmQCeDgVn2Ouy4SRWjW/view">1. MDHD_MDG_MD_ロゴ様式_配布データ</a></li>
                    		<li><i class="fas fa-chevron-right"></i><a href="https://drive.google.com/file/d/1aMGd3TCmdDxiVpbHsvsxX7Pnwia1uLbe/view">2. ロゴ運用マニュアル</a></li>
						</ul>
					</li>
				</ul>
				</div>
				<div class="content-logo manuals">
                	<p>※メディアドゥグループの各ロゴはそれぞれが定めるガイドラインに従い運用するようにしてください。<br/>
                    	以下のような用途で使用する場合は、事前に広報までご連絡ください。<br/>
                	<ul>
                    	<li>・HPへの掲載、展示会での使用等、不特定多数の方の目に触れる場に掲載する場合 </li>
                    	<li>・メディアへの掲載は他社のリリースや、展示等に使用される場合 </li>
                	</ul>
					<p>広報連絡先：pr@mediado.jp</p>
					</p>
				</div>
            </div>  
            <div id="KnowledgePageId102" class="tabcontentKnowledgePage tabcontent">
			<div class="content-logo">
                <p>メディアドゥグループの各ロゴはそれぞれが定めるガイドラインに従い運用するようにしてください。<br/>
                    以下のような用途で使用する場合は、事前に広報までご連絡ください。<br/>
                </p>
                <ul>
                    <li>・HPへの掲載、展示会での使用等、不特定多数の方の目に触れる場に掲載する場合 </li>
                    <li>・メディアへの掲載は他社のリリースや、展示等に使用される場合 </li>
                </ul>
					&nbsp;
                <p>広報連絡先：pr@mediado.jp</p>
			</div>
			&nbsp;
            <div class="card-title">MDHD Logo</div>
        <div class="group-logo">
            <div class="big-logo"> <a href="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_HD_logo_透過.png" download><img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_HD_logo_透過.png" alt=""></a></div>
            <div class="square-logo"> <a href="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_HD_logo_透過_002.png" download><img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_HD_logo_透過_002.png" alt=""></a></div>  
        </div>
        <div class="card-title"> MDHG Logo</div>
        <div class="group-logo">
			<div class="big-logo"><a href="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MDG_logo_002_背景ヌキ.png" download><img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MDG_logo_002_背景ヌキ.png" alt=""></a></div>
            <div class="square-logo"><a href="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MDG_logo_001_背景ヌキ.png" download><img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MDG_logo_001_背景ヌキ.png" alt=""></a></div>
        </div>
		<div class="card-title">MD Logo</div>
		<div class="group-logo">
			<div class="big-logo"><a href="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_新ロゴ横_カラー_透過.png" download><img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_新ロゴ横_カラー_透過.png" alt=""></a></div>
            <div class="square-logo"><a href="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_新ロゴ_非透過.png" download><img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_新ロゴ_非透過.png" alt=""></a></div>  
        </div>
      </div>  
     </div>
 </div>
</div> 
</div>
</div>
<?php get_footer(); ?>