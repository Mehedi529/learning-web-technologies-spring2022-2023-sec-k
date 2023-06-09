

function regCheckValidation(){


     var firstName = document.getElementById('firstName').value;
     var lastName = document.getElementById('lastName').value;
     var studentId = document.getElementById('studentId').value;
     var dob = document.getElementById('dob').value;   
     var email = document.getElementById('email').value;   
     var mobileNumber = document.getElementById('mobileNumber').value   
     var gender = document.getElementById('gender').value;   
     var address = document.getElementById('address').value;   
    // var class = document.getElementById('class').value;   
     var submit = document.getElementById('submit').value;
    

    
     if(firstName==""){    
       document.getElementById('fn').innerHTML = "*Please fill the firstName field ?";    
     return false; 
    }
       
    
     if(lastName==""){   
         document.getElementById('ln').innerHTML = "*Please fill the lastName field ?";   
     return false;
    }
    
       
    
    
     if(studentId==""){    
      document.getElementById('si').innerHTML = "*Please fill the studentId field ?";    
      return false;    
    }
     
    
     if(dob==""){   
     document.getElementById('d').innerHTML = "* Please fill the dob field ?";   
     return false;    
     }
     
    
    if(email==""){   
     document.getElementById('e').innerHTML = "*Please fill the email field ?";   
     return false;    
    }
    
    
    
    
     if(mobileNumber==""){   
       document.getElementById('mn').innerHTML = "* Please fill the mobileNumber field ?";   
     return false;   
     }
  
    
     if(gender==""){   
     document.getElementById('g').innerHTML = "* Please fill the gender field ?";   
     return false;
    
    }

     if(address==""){   
       document.getElementById('a').innerHTML = "*Please fill the address field ?";   
     return false;   
     }
    
    
    
    
    
   const xhttp = new XMLHttpRequest();    
   xhttp.open('POST', '../controller/registrationCheck.php', true);   
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");   
   xhttp.onreadystatechange = function(){    
      if(this.readyState == 4 && this.status == 200){
    
    //document.getElementById('txtHint').innerHTML=this.responseText;
       
     if(this.responseText == "success"){   
     location="../controller/registrationCheck.php";    
     }else{    
     if(this.responseText == "missingInfo"){    
     var result = this.responseText;    
     document.getElementById('txtHint').innerHTML=result.fontcolor('red');
    
          }   
        }    
      }    
    }
    
    xhttp.send('firstName='+firstName+'&lastName='+lastName+'&studentId='+studentId+'&dob='+dob+  
     '&email='+email+'&mobileNumber='+mobileNumber+'&gender='+gender+'&address='+address+'&submit='+submit);

}