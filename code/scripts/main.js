window.addEventListener("DOMContentLoaded", main, false);

function main()
{
  var mainNavButton = document.getElementById("main-nav-button");
  var mainNav = document.getElementById("main-nav");
  
  //set in script so it can be toggled in script
  if(mainNavButton.style.display === "block")
  {
    mainNav.style.width = "0%";
    mainNav.style.opacity = "0";
  }
  
  mainNavButton.addEventListener("click", toggleMainNav, false);
}

function toggleMainNav()
{
  var mainNav = document.getElementById("main-nav");

  if(mainNav.style.width === "0%")
  {
    mainNav.style.width = "100%";
    mainNav.style.opacity = "1";
  }
  else
  {
    mainNav.style.width = "0%";
    mainNav.style.opacity = "0";
  }
}