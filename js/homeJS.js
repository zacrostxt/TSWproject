


  function menuLinkClick(){

    var menuLink = document.getElementsByClassName('menuLink');


   for (var i = 0; i < menuLink.length;i++){
     menuLink[i].classList.remove("menuLinkActive");

   }

    this.className += " menuLinkActive";

  var showUpContainers = document.getElementsByClassName('showUpContainer');

  for (var i = 0; i < menuLink.length;i++){
    showUpContainers[i].style.display = "none";

  }

  var showUpContainerID = this.getAttribute('value');
  var showUpContainer = document.getElementById(showUpContainerID);

  showUpContainer.style.display = "block";


  };
