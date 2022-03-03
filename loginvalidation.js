function call1(){
    var email=document.forms["login-form"]["email"].value;
    var upassword=document.forms["login-form"]["upassword"].value;

if(email==null || email=="" ){
          document.getElementById("errorBox").innerHTML =
           "enter the email";
         return false;
}

if(upassword==null || upassword==""){
          document.getElementById("errorBox").innerHTML =
           "enter the password";
         return false;
}

if (email != '' && upassword != '' ){
 alert("Login successfully");
                 }

}