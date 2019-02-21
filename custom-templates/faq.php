<?php 
	/* 
	Template Name: FAQ
	*/
?>
<?php get_header();?>
<div class="container-fluid main-content">
    <div class="container main-page">
		<div class= "card card-js">
				<div class="card-title">
                    <i class="fas fa-question-circle"></i>FAQ
            	</div>
                <div class="card-content">
                    <div class="tab">
                        <button class="tablinksFAQPage" onclick="openTabFAQPage(event, 'FAQPageId101')" id="defaultOpen-faq-page">メディアドゥ 向けFAQ</button>
                        <button class="tablinksFAQPage" onclick="openTabFAQPage(event, 'FAQPageId102')" >出版デジタル機構向けFAQ</button>
                    </div>
                    <div id="FAQPageId101" class="tabcontentFAQPage tabcontent">
                        <div class="faq-chatbot">
                            <h4>FAQチャットボット（メディアドゥ向け）</h4>
                            <h6>AIスクエア社の人工知能エンジンを使ったFAQボットです。お問い合わせ内容を下記にご記入ください。</h6>
                            </br>
                            <iframe src="https://testpage.qqa.ai2-jp.com/mediado/azure.html" width="80%" height="500px" name="the-iframe" frameborder="1px"></iframe>
                        </div>
                    </div>   

                      <div id="FAQPageId102" class="tabcontentFAQPage tabcontent">
                        <div class="faq-chatbot">
                            <h4>FAQチャットボット（出版デジタル機構向け）</h4>
                            <h6>AIスクエア社の人工知能エンジンを使ったFAQボットです。お問い合わせ内容を下記にご記入ください。</h6>
                            </br>
                            <iframe src="https://testpage.qqa.ai2-jp.com/publidge/azure.html" width="80%" height="500px" name="the-iframe" frameborder="1px"></iframe>
                        </div>
                    </div>                       
                </div>
            </div> 
	</div>
</div>
<?php get_footer();?>