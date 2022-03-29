
var menu=0;
var drop=0;
function goBack() {
  window.history.back();
}

var value=1;
window.onscroll = function() {

  if(window.pageYOffset>value){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("checkMenu").checked=false;
    value=window.pageYOffset;
    // console.log(value);
  }
  if(window.pageYOffset<value){
    value=window.pageYOffset;
    // console.log(value);

  }
  if(window.pageYOffset==0){
    if(document.getElementById("checkMenu").checked==true){
      document.getElementById("mySidenav").style.width = "275px";
    }else{
      document.getElementById("mySidenav").style.width = "0";
    }
  }
}

function changeTrue(){
  document.getElementById("checkMenu").checked=true;
}

function scrollAndOpen(){
  window.scrollTo(0,0);
  window.setTimeout(openNav, 400);
  window.setTimeout(changeTrue, 500);
}


function dropMenu() {

  if(document.getElementById("drop-Menu").checked==false){
    if(document.getElementById("checkMenu").checked==true){
      document.getElementById("checkMenu").checked=false;
      document.getElementById("mySidenav").style.width = "0px";
    }
    document.getElementById("dropMenu").style.transition = "0.4s";
    document.getElementById("dropMenu").style.height = "fit-content";
  }else{
    document.getElementById("dropMenu").style.height = "0px";
  }
}

function openNav() {
  if(window.pageYOffset!=0){
    window.scrollTo(0,0);
  }
  if(document.getElementById("checkMenu").checked==false){
    if(document.getElementById("drop-Menu").checked==true){
      document.getElementById("drop-Menu").checked=false;
      document.getElementById("dropMenu").style.height = "0px";
    }
    document.getElementById("mySidenav").style.width = "275px";
  }
  else{
    document.getElementById("mySidenav").style.width = "0px";
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