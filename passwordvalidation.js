
function validate(){
            
  var pass = document.getElementById('password');
  var upper = document.getElementById('upper');
  var lower = document.getElementById('lower');
  var num = document.getElementById('number');
  var len = document.getElementById('length');
  var sp_char = document.getElementById('special_char');



if(pass.value.match(/[0-9]/)) {

num.style.color = 'green'

  
}
else{
  num.style.color ='red'
}

if(pass.value.match(/[A-Z]/)) {

upper.style.color = 'green'

  
}
else{
  upper.style.color ='red'
}

if(pass.value.match(/[a-z]/)) {

lower.style.color = 'green'

 
}
else{
lower.style.color ='red'
}

if(pass.value.match(/[!\@\#\$\%\^\&\*\(\)\_\-\\=\?\>\<\.\,]/)) {

sp_char.style.color = 'green'

 
}
else{
sp_char.style.color ='red'
}

if(pass.value.length > 6 && pass.value.length < 12) {

  len.style.color = 'green'
  
     
  }
  else{
    len.style.color ='red'
  }
}