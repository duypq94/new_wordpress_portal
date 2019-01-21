<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <link rel="profile" href="http://gmgp.org/xfn/11"> -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <?php wp_head(); ?>
 </head>
 <body>
    <div class="container-fluid logo">
        <div class="container">
            <img src="/wp-content/themes/new_portal/asset/imgs/logo_bkwh-1.jpg" alt="Logo">
        </div>
    </div>

    <div class="container primary-menu">
       <!--  <ul class="menu">
            <li>Top</li>
            <li>ビジョン</li>
            <li>ナレッジ</li>
            <li>グループ</li>
            <li>ライブラリ</li>
            <li>各種申請</li>
            <li>各種リンク</li>
            <li class="drop-menu">お問合せ
                <ul class="sub-menu">
                    <li>総務部へ問い合わせ</li>
                    <li>管理へ問い合わせ</li>
                    <li>人事部べ問い合わせ</li>
                    <li>インフラ部へ問い合わせ</li>
                    <li>情シスへ問い合わ</li>
                    <li>どこへ問い合わせすればわからない場合コチラ</li>
                </ul>
            </li>
        </ul> -->
        <?php portal_menu('primary-menu') ?>
    </div>
