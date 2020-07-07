$(document).ready(function() {
  // $("#loginBtn").click(function(){
  //   var emptUname = document.forms["loginform"]["admin_uname"].value;
  //   var emptPassword = document.forms["loginform"]["admin_password"].value;
  //   if (emptUname == "" || emptPassword == ""){
  //     document.getElementById("errormsg").innerHTML="Please fill all the fields";
  //     $("#loginErrorModal").modal();
  //   }
  // });

  const queryString=window.location.search;
  const urlParams= new URLSearchParams(queryString);
  const errormsg=urlParams.get('error');
  if(errormsg=="emptyfields"){
    document.getElementById("errormsg").innerHTML="Please fill all the fields!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }
  else if (errormsg=="sqlerror") {
    document.getElementById("errormsg").innerHTML="FATAL ERROR (Database Error)!!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }
  else if (errormsg=="wrongpassword") {
    document.getElementById("errormsg").innerHTML="Wrong Password!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }
  else if (errormsg=="invalidadmin") {
    document.getElementById("errormsg").innerHTML="Admin does not exist!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }
  else if (errormsg=="logged_out") {
    document.getElementById("errormsg").innerHTML="Logged Out Successfully!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }

});
