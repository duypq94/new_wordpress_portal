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
               <i class="fas fa-book-reader"></i>&nbsp; ライブラリ
            </div>
            <div class="card-content">
                <div class="tab">
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId101')" id="defaultOpen-library-page">全社共有</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId102')">&emsp;法務部&emsp;</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId103')" >社内規程（MDHD）</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId104')" >情報セキュリティ規程</button>
                    <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId105')" >従業員推移表</button>
                </div>
                <div id="LibraryPageId101" class="tabcontentLibraryPage tabcontent">
                    <?php echo do_shortcode('[wpdm_all_packages jstable=1 order_by="title" order="DESC"  cols="title,|categories|update_date|download_link" colheads="タイトル|カテゴリー|最終更新日付|ダウンロード／閲覧"]'); ?>
                </div>
                <div id="LibraryPageId102" class="tabcontentLibraryPage tabcontent">
                    <h5 class="ul-title">法務部</h5>
                    <?php get_template_part('/includes/custom-template/library/houmu-tab') ?>
                </div>
                <div id="LibraryPageId103" class="tabcontentLibraryPage tabcontent">
                    <h5 class="ul-title">社内規程（MD）</h5>
                    <h4>..........作成中..........</h4>
                </div>
                <div id="LibraryPageId104" class="tabcontentLibraryPage tabcontent">
                    <h5 class="ul-title">社内規程（MD）</h5>
                    <h4>..........作成中..........</h4>
                </div>
                <div id="LibraryPageId105" class="tabcontentLibraryPage tabcontent">
                    <h5 class="ul-title">従業員推移表</h5>
                    <?php get_template_part('/includes/custom-template/library/employee_transition') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>