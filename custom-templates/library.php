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
                        <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId101')" id="defaultOpen-library-page">社内規定</button>
                        <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId102')" >各種DLリンク</button>
                    </div>

                    <div id="LibraryPageId101" class="tabcontentLibraryPage tabcontent">
					 	<?php echo do_shortcode('[wpdm_all_packages categories="社外秘" jstable=1 items_per_page=10]'); ?>
                    </div>                       
                    <div id="LibraryPageId102" class="tabcontentLibraryPage tabcontent">
                        <?php echo do_shortcode('[wpdm_all_packages categories="各種ダウンロード" jstable=1 items_per_page=10]'); ?>
                    </div>   
                </div>
            </div> 
	</div>
</div>
<?php get_footer();?>