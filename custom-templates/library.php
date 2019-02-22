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
               <i class="fas fa-book-reader"></i>ライブラリー
           </div>
           <div class="card-content">
            <div class="tab">
                <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId101')" id="defaultOpen-library-page">各種DLリンク</button>
                <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId102')" >社内規程（MDHD）</button>
                <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId103')" >社内規程（MD）</button>
                <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId104')" >社内規程（出版デジタル機構）</button>
                <button class="tablinksLibraryPage" onclick="openTabLibraryPage(event, 'LibraryPageId105')" >情報セキュリティ規程</button>
            </div>
            <div id="LibraryPageId101" class="tabcontentLibraryPage tabcontent">
                <?php echo do_shortcode('[wpdm_all_packages  category="各種ダウンロード"　items_per_page="10" jstable=1 order_by="field_name"  cols="title,file_count,download_count|categories|update_date|download_link" colheads="タイトル|カテゴリー|最終更新日付|ダウンロード"]'); ?>
            </div>   

            <div id="LibraryPageId102" class="tabcontentLibraryPage tabcontent">
             <?php echo do_shortcode('[wpdm_tree category="mdhd規程" orderby="title" order="asc" download_link=1]'); ?>
         </div>                       

         <div id="LibraryPageId103" class="tabcontentLibraryPage tabcontent">
            <div>
            <h5 class="ul-title">MD規程(全社員用)</h5>
                <ul>
                    <h5 class="ul-sup-title">MD0312リスク管理規程</h5>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1veGShkeLCej4GZLiJc3U2eDFwdy0FdoR/view">2015.10.20_内部統制システムに係る監査の実施基準.doc
                        </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1UgD49joJ2akjlaCQCQ6giN8jKMKDSp0k/view">MD0312リスク管理規程（グループ共通）_2018.09.01.pdf
                        </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1n328f4I6zHLJsr3fdhJY8cRvjco_wXt6/view">MD0312リスク管理規程_付随_経営危機管理マニュアル.pdf
                        </a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1rEh7xLZmIPAQD2WaS7AT2-CDvSQjEOqG/view">MD0312リスク管理規程_付随_反社会的勢力対応マニュアル.pdf
                        </a>
                    </li>
                </ul>
                <ul>
                    <h5 class="ul-sup-title"> MD0314特定個人情報等取扱規程）</h5>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1T_ITdVE4125NyS9x_LsEs4hyy5kc3Sni/view">MD0314特定個人情報等取扱規程（グループ共通）_2018.09.01.pdf
                            行動規範 </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1T_ITdVE4125NyS9x_LsEs4hyy5kc3Sni/view">MD0314特定個人情報等取扱規程（グループ共通）_2018.09.01.pdf
                            定款 </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1pTaDca-OruJAMmlfBLuLwvsxb21VOz3o/view">MD0314特定個人情報等取扱規程_別紙.pdf
                        </a>
                    </li>
                </ul>
            </div>
         </div> 

         <div id="LibraryPageId104" class="tabcontentLibraryPage tabcontent">
             <div>
                <h5 class="ul-title">共通規程</h5>
                <ul>
                    <h5 class="ul-sup-title">共通規程</h5>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjRlZmViZjBmYjE4MWM3YjQ">0行動規範
                    </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjVmYjY0ZDlkZjQ5Yjc3MzQ">1定款
                    </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjZhMjc0MjljZWI3M2UyNWY">3内部統制システム基本方針
                    </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjRhZmYyMWVlMzdmZDZlYzE">4情報セキュリティ基本方針</a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjQ2MDAxN2I2OGQ2Y2QwMzY">5個人情報保護方針</a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a href="#"> 18経理規程 </a>
                        <ul>
                            <li><a href="#">18-1 勘定科目取扱要領 </a></li>
                        </ul>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">19 規程管理規程</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">21 固定資産管理規程 </a></li>
                </ul>
                <ul>
                    <h5 class="ul-sup-title"> 社内規程（情報セキュリティ規程）</h5>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjRlZmViZjBmYjE4MWM3YjQ">0
                    行動規範 </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjVmYjY0ZDlkZjQ5Yjc3MzQ">1
                    定款 </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjZhMjc0MjljZWI3M2UyNWY">3内部統制システム基本方針
                    </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjRhZmYyMWVlMzdmZDZlYzE">4
                    情報セキュリティ基本方針</a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                        href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjQ2MDAxN2I2OGQ2Y2QwMzY">5
                    個人情報保護方針</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="#"> 8 経理規程 </a>
                        <ul>
                            <li><a href="#">8-1 勘定科目取扱要領 </a></li>
                            <li><a href="#">8-2 情報セキュリティ基本方針 </a></li>
                            <li><a href="#">8-3 勘定科目取扱要領 </a></li>
                            <li><a href="#">8-4 個人情報保護方針 </a></li>
                            <li><a href="#">8-5 勘定科目取扱要領 </a></li>
                        </ul>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">9規程管理規程</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">11固定資産管理規程 </a></li>
                </ul>
            </div>
        </div> 

        <div id="LibraryPageId105" class="tabcontentLibraryPage tabcontent">
         <?php echo do_shortcode('[wpdm_tree category="情報セキュリティ規程" orderby="title" order="asc" download_link=1]'); ?>
     </div>
 </div>
</div> 
</div>
</div>
<?php get_footer();?>