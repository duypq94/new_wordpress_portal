<?php 
	/* 
	Template Name: Library
	*/
    ?>
    <?php get_header();?>
    <div class="container-fluid main-content">
        <div class="container main-page" id="libary-page-id">
          <div class= "card card-js">
            <div class="card-title">
               <i class="fas fa-book-reader"></i>ライブラリ
           </div>
           <div class="card-content">
                <div class="tab">
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId101')" id="defaultOpen-library-page">各種DLリンク</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId102')" id="defaultOpen-library-page">&emsp;法務部&emsp;</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId103')" >社内規程（MDHD）</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId104')" >社内規程（MD）</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId105')" >社内規程（出版デジタル機構）</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId106')" >情報セキュリティ規程</button>
                </div>
            <div id="LibraryPageId101" class="tabcontentLibraryPage tabcontent">
                <?php echo do_shortcode('[wpdm_all_packages  category="各種ダウンロード"　items_per_page="10" jstable=1 order_by="field_name"  cols="title,|update_date|download_link" colheads="タイトル|最終更新日付|ダウンロード"]'); ?>
            </div>  
            
            <div id="LibraryPageId102" class="tabcontentLibraryPage tabcontent">
                <div>
                    <h5 class="ul-title">法務部</h5>
                    <h4>..........作成中..........</h4>  
                </div>
            </div>  

            <div id="LibraryPageId103" class="tabcontentLibraryPage tabcontent">
                <div>
                    <h5 class="ul-title">社内規程（MD）</h5>
                    <h4>..........作成中..........</h4>  
                </div>
            </div>                       

            <div id="LibraryPageId104" class="tabcontentLibraryPage tabcontent">
                <div>
                    <h5 class="ul-title">社内規程（MD）</h5>
                    <h4>..........作成中..........</h4>  
                </div>
            </div> 

            <div id="LibraryPageId105" class="tabcontentLibraryPage tabcontent">
                <div>
                    <h5 class="ul-title">社内規程（出版デジタル機構）</h5>
                    <h4>..........作成中..........</h4>
                </div>
            </div> 

            <div id="LibraryPageId106" class="tabcontentLibraryPage tabcontent">
                <div>
                    <h5 class="ul-title">社内規程（MD）</h5>
                    <h4>..........作成中..........</h4>  
                </div>
     </div>
 </div>
</div> 
</div>
</div>
<?php get_footer();?>