<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  float: left; 
  width: 50%;
  line-height: 0;
  position: relative;
  margin: auto;
}
.slideshow-container2 {
  float: right; 
  width: 50%;
  line-height: 0;
  position: relative;
  margin: auto;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
.btn_detail {
    display: inline-block;
    padding: 0.5em 1em;
    background: #226e86;
    color: #fff;
    text-decoration: none;
    border-radius: 1em;
    margin: 1em 0;
    font-size: 0.8125em;
}

/*********************************************************/

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.85); 
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s;
}

/* Modal Content */
.modal-content {
  position: fixed;
  bottom: 30%;
  width: 970px;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s;
  left: 50%;
  transform: translateX(-50%);
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
.modal-content dl {
  content:'';
  display:table;
  clear:both;
}
.modal-content dt {
  font-size: medium;
  text-align: right;
  float: left;
  clear: left;
  width: 100px;        
  padding: 5px 0;
  margin:0;
  color: #c;
}
.modal-content dd {
  font-size: x-small;
  float: left;
  width: 300px;
  padding: 5px 0;
  margin-left:10px;
  color: #ccc;
}
/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 30%; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 30%; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
</style>
<div style="display: flex;justify-content: center; ">
  <div style="width: 96%; justify-content: center;">
<h2 style="color: rgba(0,0,0,0.3); font-weight: 600; line-height: 1.25; margin-top: 5px; margin-bottom: 5px"><img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/feature-sectitle_activity.svg" alt="activity"></h2>
<ul>
  <li>
    <div style="clear: both;margin: 0;padding: 0;">
      <div class="slideshow-container">
        <div class="mySlides1">
            <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/bouldering1.png" alt="">
        </div>
        <div class="mySlides1">
            <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/bouldering2.png" alt="">
        </div>
        <a class="next" onclick="plusSlides(1,0)">&#10095;</a>
      </div>
        <dl style="float: right;padding-top: 1.5rem; padding-bottom: 1.5rem; width: 48%;">
            <dt style="padding-left: 1.5rem;border-left: solid 0.5rem #2b91b3;"><h5>ボルダリング部</h5></dt>
            <dd style="padding: 0; margin: 0; font-size: 0.875em;">
                <p> 全員初心者の部活動ですので、気軽に参加していただけます。Slackチャンネルの #x_ボルダリングにて開催日時などを告知してますので是非ご参加ください。とてもアットホームな部活動です！ぜひ皆さんも一緒にゆる～く、たのし～く壁登りしましょう！</p>
                <a class="btn_detail" href="#myModal1">詳しくはこちら</a>
            </dd>
        </dl>
    </div>
  </li>

  <li>
    <div style="clear: both;margin: 0;padding: 0;">
      <div class="slideshow-container2">
        <div class="mySlides2">
            <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/futsal2.png" alt="">
        </div>
        <div class="mySlides2">
            <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/futsal1.png" alt="">
        </div>
        <a class="prev" onclick="plusSlides(-1,1)">&#10094;</a>
      </div>
      <dl style="float: left;padding-top: 1.5rem; padding-bottom: 1.5rem; width: 48%;">
          <dt style="padding-left: 1.5rem;border-left: solid 0.5rem #2b91b3;"><h5>フットサル部</h5></dt>
          <dd style="padding: 0; margin: 0; font-size: 0.875em;">
              <p> フットサル部のモットーは「楽しくわいわいプレイできること」です。様々な部署・立場・サッカー経験の方々が集まっています。スキルに関係なくどなたでも参加しやすい環境で、普段関わりのない方と交流を深めることもできます。普段仕事で机に向かうことが多いので、一緒に汗を流してリフレッシュしましょう！！</p>
              <a  class="btn_detail" href="#myModal2">詳しくはこちら</a>
          </dd>
      </dl>
    </div>
  </li>

  <li>
    <div style="clear: both;margin: 0;padding: 0;">
      <div class="slideshow-container">
        <div class="mySlides3">
            <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/music2.png" alt="">
        </div>
        <div class="mySlides3">
            <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/music1.png" alt="">
        </div>
        <a class="next" onclick="plusSlides(1,2)">&#10095;</a>
      </div>
      <dl style="float: right;padding-top: 1.5rem; padding-bottom: 1.5rem; width: 48%;">
          <dt style="padding-left: 1.5rem;border-left: solid 0.5rem #2b91b3;"><h5>軽音楽部</h5></dt>
          <dd style="padding: 0; margin: 0; font-size: 0.875em;">
              <p> 気軽に見学にきてください。初心者への楽器指導も行ってますので、お気軽にご参加ください。Slackチャンネルの #x_music にて開催日時の告知をしてますので良ければご参加ください。カッコイイ演奏を見ながらお酒飲んだり、おしゃべりしたり！それぞれ好きなスタイルで音楽を楽しみましょう！</p>
              <a class="btn_detail" href="#myModal3">詳しくはこちら</a>
          </dd>
      </dl>
    </div>
  </li>

  <li>
    <div style="clear: both;margin: 0;padding: 0;">
      <div class="slideshow-container2">
        <div class="mySlides4">
            <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/yakyu2.png" alt="">
        </div>
        <div class="mySlides4">
            <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/yakyu1.png" alt="">
        </div>
        <a class="prev" onclick="plusSlides(-1,3)">&#10094;</a>
      </div>
      <dl style="float: left;padding-top: 1.5rem; padding-bottom: 1.5rem; width: 48%;">
          <dt style="padding-left: 1.5rem;border-left: solid 0.5rem #2b91b3;"><h5>野球部</h5></dt>
          <dd style="padding: 0; margin: 0; font-size: 0.875em;">
              <p>「今が全盛期」をモットーに初心者から経験者まで楽しく野球をやってます。</p>
              <a class="btn_detail" href="#myModal4">詳しくはこちら</a>
          </dd>
      </dl>
    </div>
  </li>

</ul>
</div>
</div>

<!-- The Modal1 -->
<div id="myModal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
      <div style="float: left; line-height: 0; display: block; width: 50%; height: auto;text-align: center;">
        <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/bouldering1.png" width="500" height="372" alt="">
      </div>
      <div style="float: right; color: #fff; width: 48%;">
      <span class="close">&times;</span>
        <h3><strong>ボルダリング部</strong></h3>
          <dl>
            <dt>代表者名：</dt>
            <dd>三森泰規</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>部員数：</dt>
              <dd>15名程度</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>活動内容：</dt>
              <dd>月に2回ほど開催</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt><p>活動計画：<p></dt>
            <dd><p>今後は部員数を増やして、社外の人との交流会も行っていこうと思います。</p></dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>PR：</dt>
            <dd><p>全員初心者の部活動ですので、気軽に参加していただけます。Slackチャンネルの #x_ボルダリングにて開催日時などを告知してますので是非ご参加ください。とてもアットホームな部活動です！ぜひ皆さんも一緒にゆる～く、たのし～く壁登りしましょう！</p></dd>
          </dl>
      </div>
  </div>
</div>

  <!-- The Modal2 -->
<div id="myModal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
      <div style="float: left; line-height: 0; display: block; width: 50%; height: auto;text-align: center;">
        <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/futsal1.png" width="500" height="372" alt="">
      </div>
      <div style="float: right; color: #fff; width: 48%;">
      <span class="close">&times;</span>
        <h3><strong>フットサル部</strong></h3>
          <dl>
            <dt>代表者名：</dt>
            <dd>鹿室　桃汰</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>部員数：</dt>
              <dd>30名</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>活動内容：</dt>
              <dd>毎月1回/1時間実施しています（人数が多い場合には30分延長することもあります）シューズ等のレンタルも可能です。</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt><p>活動計画：<p></dt>
            <dd><p>今まで通りの活動に加え、今年度は「企業対抗試合」を実施します。</p></dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>PR：</dt>
            <dd><p>フットサル部のモットーは「楽しくわいわいプレイできること」です。様々な部署・立場・サッカー経験の方々が集まっています。スキルに関係なくどなたでも参加しやすい環境で、普段関わりのない方と交流を深めることもできます。普段仕事で机に向かうことが多いので、一緒に汗を流してリフレッシュしましょう！！</p></dd>
          </dl>
      </div>
  </div>
</div>

 <!-- The Modal3 -->
 <div id="myModal3" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
      <div style="float: left; line-height: 0; display: block; width: 50%; height: auto;text-align: center;">
        <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/music1.png" width="500" height="372" alt="">
      </div>
      <div style="float: right; color: #fff; width: 48%;">
      <span class="close">&times;</span>
        <h3><strong>軽音楽部</strong></h3>
          <dl>
            <dt>代表者名：</dt>
            <dd>三森泰規</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>部員数：</dt>
              <dd>20名程度</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>活動内容：</dt>
              <dd>月に1回ほど都内スタジオにて公開練習を行っています。</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt><p>活動計画：<p></dt>
            <dd><p>最初の目標としては、会社対抗の紅白歌合戦を都内のライブハウスで開催したいと思っています。</p></dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>PR：</dt>
            <dd><p>気軽に見学にきてください。初心者への楽器指導も行ってますので、お気軽にご参加ください。Slackチャンネルの #x_music にて開催日時の告知をしてますので良ければご参加ください。カッコイイ演奏を見ながらお酒飲んだり、おしゃべりしたり！それぞれ好きなスタイルで音楽を楽しみましょう！</p></dd>
          </dl>
      </div>
  </div>
</div>

  <!-- The Modal4 -->
<div id="myModal4" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
      <div style="float: left; line-height: 0; display: block; width: 50%; height: auto;text-align: center;">
        <img src="<?php echo get_template_directory_uri()?>/asset/imgs/club/yakyu1.png" width="500" height="372" alt="">
      </div>
      <div style="float: right; color: #fff; width: 48%;">
      <span class="close">&times;</span>
        <h3><strong>野球部</strong></h3>
          <dl>
            <dt>代表者名：</dt>
            <dd>前川 翼</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>部員数：</dt>
              <dd>11名</dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>活動内容：</dt>
              <dd><p>・主に練習試合/公式試合の実施<br>・（たまに）都内グラウンドでの練習<p></dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt><p>活動計画：<p></dt>
            <dd><p>・大会出場 （できれば入賞）<br>・野球をもっと好きになる/上手くなる</p></dd>
          </dl>
          <dl style="padding-bottom: 30px; margin: 0;padding: 0;">
            <dt>PR：</dt>
            <dd><p>「今が全盛期」をモットーに初心者から経験者まで楽しく野球をやってます。</p></dd>
          </dl>
      </div>
  </div>
</div>

<script>
var slideIndex = [1,1,1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4"];

// Get the button that opens the modal
var btn = document.querySelectorAll("a.btn_detail");

// All page modals
var modals = document.querySelectorAll('.modal');

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("close");

// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
    }
 }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
     }
    }
}

showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

