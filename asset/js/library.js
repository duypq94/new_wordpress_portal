// Library Page
function openTabLibraryPage(evt, tabId) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontentLibraryPage");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinksLibraryPage");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(tabId).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // var elementList = document.querySelectorAll(".tabcontentLibraryPage a");
  // for (var i=0; i<elementList.length; i++){
  //   elementList[i].setAttribute('target', '_blank');
  // }
  document.getElementById("defaultOpen-library-page").click();