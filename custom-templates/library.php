<?php 
	/* 
	Template Name: Library
	*/
?>
<?php get_header();?>
<div class="container-fluid main-content">
    <div class="container main-page">
		<div class= "card card-js">
				<div class="card-title">
					<i class="fas fa-book-reader"></i>ライブラリー
            	</div>
                <div class="card-content">
                    <div class="tab">
                        <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId101')" id="defaultOpen-library-page">各種DLリンク</button>
                        <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId102')" >MDHD</button>
                        <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId103')" >MD</button>
                        <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId104')" >出版デジタル機構</button>
                    </div>
                    <div id="LibraryPageId101" class="tabcontentLibraryPage tabcontent">
                        <?php echo do_shortcode('[wpdm_all_packages categories="各種ダウンロード" jstable=1 items_per_page=10]'); ?>
                    </div>   

                    <div id="LibraryPageId102" class="tabcontentLibraryPage tabcontent">
					 	<?php echo do_shortcode('[wpdm_all_packages categories="MDHD規程" jstable=1 items_per_page=10]'); ?>
                    </div>                       
                    
                    <div id="LibraryPageId103" class="tabcontentLibraryPage tabcontent">
					 	<?php echo do_shortcode('[wpdm_all_packages categories="md規定" jstable=1 items_per_page=10]'); ?>
                    </div> 

                    <div id="LibraryPageId104" class="tabcontentLibraryPage tabcontent">
					 	<?php echo do_shortcode('[wpdm_all_packages categories="pubridge規定" jstable=1 items_per_page=10]'); ?>
                    </div> 

                </div>
            </div> 
	</div>
</div>
<?php get_footer();?>