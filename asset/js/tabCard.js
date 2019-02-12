function openTabNoti(evt, tabId) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontentNoti");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinksNoti");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(tabId).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen-noti").click();

function openTabSys(evt, tabId) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontentSys");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinksSys");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(tabId).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen-sys").click();

function openTabNews(evt, tabId) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontentNews");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinksNews");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(tabId).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen-news").click();


// Group Page
function openTabGroupPage(evt, tabId) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontentGroupPage");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinksGroupPage");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(tabId).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen-group-page").click();