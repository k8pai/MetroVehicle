
var menu=0;
var drop=0;
function goBack() {
  window.history.back();
}
var lastScrollTop = 0;

// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
window.addEventListener("scroll", function(){ 
   var st = window.pageYOffset || document.documentElement.scrollTop;
   if (st!=lastScrollTop){
    document.getElementById("head-pointer").style.transition = "0.2s";
    document.getElementById("head-pointer").style.display = "block";
   }
   lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);

function dropMenu() {
  if(drop==0)
  {
    if(menu==1)
    {
      openNav();
    }
    document.getElementById("dropMenu").style.height = "fit-content";
    document.getElementById("section").style.marginTop = "160px";
    // document.getElementById("section").style.overflow-y = "hidden";
    drop++;
  }
  else if(drop==1)
  {
    document.getElementById("dropMenu").style.height = "0px";
    drop--;
  }
}

function openNav() {
  if(menu==0)
  {
    if(drop==1)
    {
      dropMenu();
    }
    document.getElementById("mySidenav").style.width = "275px";
    menu++;
  }
  else if(menu==1)
  {
    document.getElementById("mySidenav").style.width = "0px";
    menu--;
  }
}

function focedit()
{
  document.getElementById("mail").removeAttribute("readonly");
}