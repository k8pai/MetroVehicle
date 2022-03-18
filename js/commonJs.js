
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

window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("mySidenav").style.width = "0px";
  }
  prevScrollpos = currentScrollPos;
}
// document.getElementById("body-div").addEventListener("scroll", myFunction);

// function myFunction() {
//   document.getElementById("mySidenav").style.display = "none";
// }

window.onscroll = function() {
    document.getElementById("mySidenav").style.width = "0";
  }
function dropMenu() {

    // window.scroll(0, 0);
  if(drop==0)
  {
    if(menu==1)
    {
      openNav();
    }
    document.getElementById("dropMenu").style.height = "fit-content";
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
  document.getElementById("fname").removeAttribute("readonly");
  document.getElementById("lname").removeAttribute("readonly");
  document.getElementById("phone").removeAttribute("readonly");
  document.getElementById("mail").removeAttribute("readonly");
  document.getElementById("save-btn").removeAttribute("disabled");
}

function focreadonly(){
  document.getElementById("fname").setAttribute('readonly', true);
  document.getElementById("lname").setAttribute('readonly', true);
  document.getElementById("phone").setAttribute('readonly', true);
  document.getElementById("mail").setAttribute('readonly', true);
  document.getElementById("save-btn").setAttribute('disabled', true);
}