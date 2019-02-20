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
                        <button class="tablinksFAQPage" onclick="openTabFAQPage(event, 'FAQPageId101')" id="defaultOpen-faq-page">旧 MediaDo</button>
                        <button class="tablinksFAQPage" onclick="openTabFAQPage(event, 'FAQPageId102')" >旧 出版デジタル機構</button>
                    </div>
                    <div id="FAQPageId101" class="tabcontentFAQPage tabcontent">
                        <div class="faq-chatbot">
                            <h4>旧 MediaDo - FAQ チャットボット</h4>
                            </br>
                            <iframe src="https://testpage.qqa.ai2-jp.com/mediado/azure.html" width="80%" height="500px" name="the-iframe" frameborder="1px"></iframe>
                        </div>
                    </div>   

                      <div id="FAQPageId102" class="tabcontentFAQPage tabcontent">
                        <div class="faq-chatbot">
                            <h4>旧 出版デジタル機構 - FAQ チャットボット</h4>
                            </br>
                            <iframe src="https://testpage.qqa.ai2-jp.com/publidge/azure.html" width="80%" height="500px" name="the-iframe" frameborder="1px"></iframe>
                        </div>
                    </div>                       
                </div>
            </div> 
	</div>
</div>
<?php get_footer();?>