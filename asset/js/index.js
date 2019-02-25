var elementList = document.querySelectorAll(".tabcontentLibraryPage a");
  for (var i=0; i<elementList.length; i++){
    elementList[i].setAttribute('target', '_blank');
  }