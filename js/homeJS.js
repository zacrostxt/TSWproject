


  function menuLinkClick(){

    var menuLink = document.getElementsByClassName('menuLink');


   for (var i = 0; i < menuLink.length;i++){
     menuLink[i].classList.remove("menuLinkActive");

   }

    this.className += " menuLinkActive";


  };
