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
                <li><i class="fas fa-chevron-right"></i><a href="https://drive.google.com/drive/u/0/folders/1-HgMc2Rx3DORqkXJqeG3nt6bd8sSQgdG"> MD0312リスク管理規程 </a>
                <ul>           
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
                <li><i class="fas fa-chevron-right"></i><a href="https://drive.google.com/drive/u/0/folders/1XFO9Sr0BdLBkDcZ5R272soCm37FWzvVt"> MD0314特定個人情報等取扱規程 </a>
                <ul>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1T_ITdVE4125NyS9x_LsEs4hyy5kc3Sni/view">MD0314特定個人情報等取扱規程（グループ共通）_2018.09.01.pdf
                            行動規範 </a></li>
                    <li><i class="fas fa-chevron-right"></i><a
                            href="https://drive.google.com/file/d/1pTaDca-OruJAMmlfBLuLwvsxb21VOz3o/view">MD0314特定個人情報等取扱規程_別紙.pdf
                        </a>
                    </li>
                </ul>
              
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1BpOTztGj0tRm4wHH30tsujLGmf8x8144/view">MD)採用紹介制度運用マニュアル_2018.09.01(未更新).docx
                    </a>
                    </li> 
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1L3YiAo4bdufZH11ahvDQsNSzU-CpwxRy/view">MD)従業員代表選出マニュアル_2018.09.01.pdf
                    </a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1ZYl_n0K4hOfEkeBGzx6JPhznNwU6mCTh/view">MD0303秘密保持規程（グループ共通） _2018.09.01.pdf
                            </a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/17CMcBT-Hw0Imk0YyTgwqt1D5jKK7l7nO/view">MD0304情報機器管理規程（グループ共通）_2018.09.01.pdf
                    </a>
                    </li> 
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1I8Ucj8GgkVVXKqnZwFILQKih8Zc4a4Ga/view">MD0305パソコンネットワーク管理規程（グループ共通）_2018.09.01.pdf
                            </a>
                    </li> 
                
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1TFqypcp9UkXedFNIb9yKRfOxWjwoDD1n/view">MD0306電子メール使用規程（グループ共通）_2018.09.01.pdf
                            </a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1hU5a0QfJ2Gn6aNVMgtNZ2TR1OytsjD-K/view">MD0307個人情報管理規程（グループ共通）_2018.09.01.pdf
                    </a>
                    </li> 
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1EvzCcaFBH39hA74zWIQ-kCCYWmjE1y1x/view">MD0308内部者取引管理規程（グループ共通）_2018.09.01.pdf
                            </a>
                    </li> 
                
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/19gCQPUQZGt40S5KUEbBMjf_wQOO63v-6/view">MD0309職務発明規程（グループ共通）_2018.09.01.pdf
                            </a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1I4EO15sRJGuh6k-K6TYZHRc_rbeHgDRo/view">MD0313内部通報規程（グループ共通）_2018.09.01.pdf
                    </a>
                    </li> 
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/12LrLdZ-BTqJuQKvk6yZ7Ca_g2vjgPJi8/view">MD0410旧姓・通称使用規程（グループ共通）_2018.09.01.pdf
                            </a>
                    </li> 
                
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1cY3v6qyOObmHI9nrwhN6gL9ZUkOXgIgI/view">MD0503通勤補助手当支給基準(役員・社員・嘱託）2018.3.1.pdf
                            </a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1stjcsRRbtwEHKUwSChgKJoEPqgWgmr_k/view">MD0504育児休業及び育児短時間勤務に関する規程_2018.09.01.pdf
                            </a>
                    </li> 
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1qcwaH4fbq4JQxNkrFQypbIB6H25-7OmQ/view">MD0505介護休業及び介護短時間勤務に関する規程_2018.09.01.pdf
                            </a>
                    </li>        
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1rEh7xLZmIPAQD2WaS7AT2-CDvSQjEOqG/view">MD0509マタハラ・セクハラ等防止規程_2018.09.01.pdf
                            </a>
                    </li>
                    <li><i class="fas fa-chevron-right"></i><a
                                href="https://drive.google.com/file/d/1JqzTET3XYl32Ag3rxApZBzZx7ix56I-i/view">MD0510パワハラ防止規程_2018.09.01.pdf
                            </a>
                    </li>
            </ul>  
            </div>
         </div> 

         <div id="LibraryPageId104" class="tabcontentLibraryPage tabcontent">
         <div>
                        <h5 class="ul-title">社内規程</h5>
                        <ul>
                            <h5 class="ul-sup-title">社内規程</h5>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NGVmZWJmMGZiMTgxYzdiNA">0.行動規範
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NWZiNjRkOWRmNDliNzczNA">1.定款
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MmJjMjUxYmM0NDA0YTNi">2.経営会議規程
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NmEyNzQyOWNlYjczZTI1Zg">3.内部統制システム基本方針</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NGFmZjIxZWUzN2ZkNmVjMQ">4.情報セキュリティ基本方針</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NDYwMDE3YjY4ZDZjZDAzNg">5.個人情報保護方針</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MzBhNDU3MTg5YTc0NzY5ZA">6.組織規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NzBmNTUyZDZjYmFmODAzNQ">7.業務分掌規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/pubridge.jp/viewer?a=v&pid=sites&srcid=cHVicmlkZ2UuanB8aW50ZXJuYWwtcG9ydGFsfGd4OjY3NmM4ODEyNDMxYmVmMWE">8.職務権限規程
                                </a>
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6M2MzOTE1NTAyZTNhMDNkZg">8-1.職務権限表（出版ﾃﾞｼﾞﾀﾙ機構）
                                        </a></li>
                                </ul>
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6M2MzOTE1NTAyZTNhMDNkZg">
                                            8-1職務権限表（ﾒﾃﾞｨｱﾄﾞｩﾎｰﾙﾃﾞｨﾝｸﾞｽ）</a></li>
                                </ul>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MTQ1NzU5OTdjYjExOTc2ZQ">9.稟議規程
                                </a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MzQ4YjBiOGQ3MjdjNDQ5Yw">10.執行役員規程
                                </a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6Njg5YzM5NThmYWZjODIwNQ">11.就業規則</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a href="#">12.就業規則（契約社員）</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NjUxMGQwMjFkYTI3NzM1YQ">13.給与規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6OTZjNjkwMGQ0NWU2ZDA2">14.育児休業介護休業規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MTQyMDY3ZmNmZGQ2ZGZmMQ">
                                    15.出張規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NzI3ZTFlMjAyMTQ1ZDkz">16.退職金規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MWVmZjkwM2UyZDEzYzJmNQ">17.慶弔見舞金規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NTk5NWI2YmE2YjliNzNjNQ">18.経理規程
                                </a>
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MTIyNjUwYTZjM2IyOTdmMA">18-1.勘定科目取扱要領
                                        </a></li>
                                </ul>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NmNiYzk3MjRjZTNmMzI2Zg">
                                    19.規程管理規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NGZkNjEzYTlkYjA4ZTljMA">21.固定資産管理規程
                                </a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NmQ4OGVhMzc2ZDUzZWU3Mg">22.与信管理規程
                                </a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NmI4YWE5NjY4OGQ1ZWI4ZA">23.印章管理規程
                                </a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NGI3NTBjMjI1OGE2MzZmZQ">24.文書管理規程
                                </a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MTZlOWM5MzgyMzM2OGVkZg">25.危機管理規程</a>
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MTQ2NmJjOWZiYmFiYzQ5Yg">25-1
                                            危機管理を要するリスクの整理
                                        </a></li>
                                </ul>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MmIzYWJjYzYzOTMwODkwMQ">26.内部監査規程
                                </a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NzA3ZDVkOTIzNzE2OTUxNA">27.インサイダー取引防止規程
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <h5 class="ul-sup-title"> 社内規程（情報セキュリティ規程）</h5>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NDgyOTBmMGE1N2JkNGQ0Zg">20.情報セキュリティ管理規程</a>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NDc5Y2NmNDliNjU5NDJjMg">20-1.個人情報の取扱に関する細則
                                </a>
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6Njg5MDQyOTBkZmQ4ZGFjMw">20-1-01.例外事項適用申請書
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NjdmYjFiN2NkMWM5ODUwYg">20-1-02.個人情報取扱申請書
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NjA3ZWI0NWUxMTY4YjdmYw">20-1-03-01.直接書面取得通知文（応募者</a>
                                    </li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MmM2ODI2Nzk5ZmU0ZDRiMA">20-1-03-02.直接書面取得通知文（従業者）
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6N2Q0ZmUwNmUyMDFhNzU1Yg">20-1-03-03.直接書面取得通知文（ウェブ・資料請求・問合せ）
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NzdjM2RlYzllZDUxYjgzYg">20-1-03-04.個人情報取扱同意書　(従業員用</a>
                                    </li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NjZlNWM1NmVmZjcwNjEwNQ">20-1-04-01.入社誓約書(社員・派遣)</a>
                                    </li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NzhjMWRmN2NmY2Y4MjA4NQ">20-1-04-02.入社誓約書(業委)
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NDlkYzE3MDRkNTQ4Zjg0Mg">20-1-04-03.誓約書(退職時)
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MzQxYjZlNTYwMTI0OGQ1NA">20-1-05.利用目的変更通知文
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NDVhMTdlZjcyOGY5MTEzYw">20-1-06.本人アクセス通知
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MTk5ZDQ5MWVmYTc5YzcwNw">20-1-07.第三者提供通知文</a>
                                    </li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MzQ0YzhjMzJhMGY1MWVhMg">20-1-08.委託先調査票
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NmRmYjBhMDBlOTg2Y2FhMw">20-1-09.委託先評価表</a>
                                    </li>
                                    <li><i class="fas fa-chevron-right"></i><a href="#">20-1-10.委託先一覧表</a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NDE0MzQ5YWQ3MTBkNzkxNg">20-1-11.個人情報の取扱いに関する契約書</a>
                                    </li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NDA2OGVmYWY1NmRiMmFi">20-1-12.個人情報お問い合わせ申請書
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NTdlMzk5MjlmMWNlMjMwZg">20-1-13.個人情報お問い合わせ報告書
                                        </a></li>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MzYyYjQyZWFmMjVjZTIwYw">20-1-14.苦情・相談受付票
                                        </a></li>
                                </ul>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MmU0NmI3YTZmYjVlZDYzZA">20-2.システム利用に関する情報セキュリティ管理細則</a>
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i><a
                                            href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MWY1MmFkNDE5ODIzNjMy">20-2-01　ソーシャルネットワーキングサービス利用に関するガイドライン
                                        </a></li>
                                </ul>
                            </li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NjE1MTAxMTk0Y2YxMDkwYg">20-3.外部委託に関する情報セキュリティ細則
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6ZjZlMjBkM2MyZjM4NmU">20-4.採用退職時に関する情報セキュリティ管理細則
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MjdiMWJhOTRkYzRmYjYwMw">20-5.システム資産の調達・開発・保守に関する情報セキュリティ細則
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6NTBhOGFjYTMwNGVhYWZjOA">20-6.ネットワーク管理に関する情報セキュリティ細則
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6N2JkY2NjMTk3MjViZGFkYQ">20-7.物理セキュリティに関する細則
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6M2FhMjg5MTQ1YTExNjFjNw">20-8.情報取扱細則
                                </a></li>
                            <li><i class="fas fa-chevron-right"></i><a
                                    href="https://docs.google.com/a/g.pubridge.jp/viewer?a=v&pid=sites&srcid=Zy5wdWJyaWRnZS5qcHxpbnRlcm5hbC1wb3J0YWx8Z3g6MzM3MDZlYzkzMWRmMDg0NQ">20-9.システム資産の利用・管理に関する細則
                                </a></li>
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