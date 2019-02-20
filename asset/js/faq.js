// Library Page
function openTabFAQPage(evt, tabId) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontentFAQPage");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinksFAQPage");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(tabId).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  document.getElementById("defaultOpen-faq-page").click();