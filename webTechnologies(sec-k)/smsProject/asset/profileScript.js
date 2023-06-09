
 function profileCheckValidation(){

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var gender = document.getElementById('gender').value;
    var dob = document.getElementById('dob').value;
    var blood_group = document.getElementById('blood_group').value;
    // var class = document.getElementById('class').value;


    if(name == ""||email =="" || gender =="" || dob =="" || blood_group =="" ){
        document.getElementById('message').innerHTML = "please fill the field?";
        return false;
    }
    else{
        document.getElementById("message").innerHTML="successfully Done!";
    }

    const xhttp = new XMLHttpRequest();    
    xhttp.open('POST', '../controller/profileCheck.php', true);   
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");   
    xhttp.onreadystatechange = function(){    
       if(this.readyState == 4 && this.status == 200){
     
     //document.getElementById('txtHint').innerHTML=this.responseText;
        
      if(this.responseText == "success"){   
      location="../controller/profileCheck.php";    
      }else{    
      if(this.responseText == "missingInfo"){    
      var result = this.responseText;    
      document.getElementById('txtHint').innerHTML=result.fontcolor('red');
     
           }   
         }    
       }    
     }
     
     xhttp.send('name='+name+'&email='+email+'&gender='+gender+'&dob='+dob+  
      '&blood_group='+blood_group+'&submit='+submit);
 
 }