var menu=0;
      var drop=0;
      var fname = document.getElementById("fname");
      var lname = document.getElementById("lname");
      var gen1 = document.getElementById("gen1");
      var gen2 = document.getElementById("gen2");
      var ph = document.getElementById("ph");
      var mail = document.getElementById("mail");
      var pass = document.getElementById("pass");
      var uname = document.getElementById("uname");
      var upass = document.getElementById("upass");
      var btn = document.getElementById("btn");
      uname.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("upass").focus();
        }
      });
      upass.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("btn").click();
        }
      });
      fname.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("lname").focus();
        }
      });
      lname.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("gen1").focus();
        }
      });
      gen1.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("gen2").focus();
        }
      });
      gen2.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("ph").focus();
        }
      });
      ph.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("mail").focus();
        }
      });
      mail.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("pass").focus();
        }
      });
      pass.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
         event.preventDefault();
         document.getElementById("btn").click();
        }
      });
      function goBack() {
        window.history.back();
      }
      function dropMenu() {
        if(drop==0)
        {

          document.getElementById("dropMenu").style.height = "fit-content";
          document.getElementById("section").style.marginTop = "120px";
          drop++;
        }
        else if(drop==1)
        {
          document.getElementById("dropMenu").style.height = "0px";
          document.getElementById("section").style.marginTop = "0px";
          drop--;
        }
      }