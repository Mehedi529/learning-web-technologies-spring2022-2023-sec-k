

function communicationValidation(){


    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;    
   // var class = document.getElementById('class').value;   
    var submit = document.getElementById('submit').value;
   

   
    if(name==""){    
      document.getElementById('n').innerHTML = "*Please fill the name field ?";    
    return false; 
   }
      
   
    if(email==""){   
        document.getElementById('e').innerHTML = "*Please fill the email field ?";   
    return false;
   }
   
      
   
   
    if(subject==""){    
     document.getElementById('s').innerHTML = "*Please fill the subject field ?";    
     return false;    
   }
    
   
    if(message==""){   
    document.getElementById('m').innerHTML = "* Please fill the message field ?";   
    return false;    
    }
   
   
   
   
   
  const xhttp = new XMLHttpRequest();    
  xhttp.open('POST', '../controller/communicationCheck.php', true);   
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");   
  xhttp.onreadystatechange = function(){    
     if(this.readyState == 4 && this.status == 200){
   
   //document.getElementById('txtHint').innerHTML=this.responseText;
      
    if(this.responseText == "success"){   
    location="../controller/communicationCheck.php";    
    }else{    
    if(this.responseText == "missingInfo"){    
    var result = this.responseText;    
    document.getElementById('txtHint').innerHTML=result.fontcolor('red');
   
         }   
       }    
     }    
   }
   
   xhttp.send('name='+name+'&email='+email+'&subject='+subject+'&message='+message+  
    '&submit='+submit);

}