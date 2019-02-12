<?php 
	/* 
	Template Name: group
	*/
?>
<?php get_header();?>
<div class="container-fluid main-content">
    <div class="container main-page">
        <div class="card card-js">
            <div class="card-title">
                <i class="fas fa-building"></i>株式会社メディアドゥホールディングス
            </div>
            <div class="card-content">
                <div class="tab">
                    <button class="tablinksGroupPage tablinks" onclick="openTabGroupPage(event, 'GroupPageId101')"
                        id="defaultOpen-group-page">会社情報</button>
                    <button class="tablinksGroupPage tablinks"
                        onclick="openTabGroupPage(event, 'GroupPageId102')">グループ会社一覧</button>
                </div>


                <div id="GroupPageId101" class="tabcontentGroupPage tabcontent">
                    <p>Haaaaaaaaaaaaaa</p>
                </div>

                <div id="GroupPageId102" class="tabcontentGroupPage tabcontent">
                    <p>baaaaaaaaaaaasssss</p>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer();?>