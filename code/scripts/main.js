window.addEventListener("DOMContentLoaded", main, false);

function main()
{
  var mainNavButton = document.getElementById("main-nav-button");
  var mainNav = document.getElementById("main-nav");
  
  //set style in script so it can be toggled in script
  var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if(parseInt(windowWidth) <= 768)
  {
    mainNav.style.width = "0%";
  }
  
  mainNavButton.addEventListener("click", toggleMainNav, false);
}

function toggleMainNav()
{
  var mainNav = document.getElementById("main-nav");

  if(mainNav.style.width === "0%")
  {
    mainNav.style.width = "100%";
  }
  else
  {
    mainNav.style.width = "0%";
  }
}