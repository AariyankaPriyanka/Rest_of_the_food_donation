function call2(){
  var Uname= document.forms['signup-form']["Uname"].value;
  var email= document.forms['signup-form']["email"].value;
  var password= document.forms['signup-form']["password"].value;
  var cpassword= document.forms['signup-form']["cpassword"].value;
  
  if(Uname == null || Uname ==''){
    document.getElementById("errorbox").innerHTML =
    "Enter the Username";
  return false;
}
  if(email== null || email ==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the Email";
    return false;
  }
  
  if(password == null || password ==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the Password";
    return false;
  }
  if(cpassword == null || cpassword ==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the ConfirmPassword";

     
  if(password != cpassword){
    document.getElementById("errorbox").innerHTML=
    "password dont match"
  }
    return false;
  }
  if(  Uname != '' && email != ''  &&  password != ' ' && cpassword != ''  && password == cpassword ){
      alert("Signup succesfully");
  }
}