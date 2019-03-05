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
                <div>
				<h5 class="ul-title">ガイドライン</h5>
					<ul>
                    	<li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1PRymOpbE2C14ccmQCeDgVn2Ouy4SRWjW/view">1. MDHD_MDG_MD_ロゴ様式_配布データ
                        	</a>
                    	</li>
                    	<li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1aMGd3TCmdDxiVpbHsvsxX7Pnwia1uLbe/view">2. ロゴ運用マニュアル
                        	</a>
                    	</li>
                	</ul>

				</div>
            </div>  
            
            <div id="KnowledgePageId102" class="tabcontentKnowledgePage tabcontent">
            <div class="card-title">MDHD Logo (<a href="https://drive.google.com/drive/u/0/folders/1LuZ1f7BDF8r7x_sbEW9XG92MAZp_RXg1">ダウンロードリンク</a>)</div>
        <div class="group-logo">
            <div class="big-logo"> <img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_HD_logo_透過.png" alt=""></div>
            <div class="square-logo"> <img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_HD_logo_透過_002.png" alt=""></div>  
        </div>
        <div class="card-title"> MDHG Logo (<a href="https://drive.google.com/drive/u/0/folders/1T43hxvWvCCmVu66-1JsmuKrLXY200fKQ">ダウンロードリンク</a>)</div>
        <div class="group-logo">
            <div class="big-logo"> <img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_新ロゴ横_カラー_透過.png" alt=""></div>
            <div class="square-logo"> <img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MD_新ロゴ_非透過.png" alt=""></div>  
        </div>
        <div class="card-title">MD Logo (<a href="https://drive.google.com/drive/u/0/folders/1Afr_oifeboIpkNa_7LYAgIp9tQ_E9PF4">ダウンロードリンク</a>)</div>
        <div class="group-logo">
            <div class="big-logo"> <img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MDG_logo_002_背景ヌキ.png" alt=""></div>
            <div class="square-logo"> <img src="<?php echo get_template_directory_uri() ?>/asset/imgs/logos/MDG_logo_001_背景ヌキ.png" alt=""></div>  
        </div>
            </div>  
     </div>
 </div>
</div> 
</div>
</div>
<?php get_footer(); ?>