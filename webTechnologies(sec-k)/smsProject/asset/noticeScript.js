

function regCheckValidation(){


    var sendNoticeTo = document.getElementById('sendNoticeTo').value;
    var subject = document.getElementById('subject').value;
    var notice = document.getElementById('notice').value;  
    var submit = document.getElementById('submit').value;
   

   
    if(sendNoticeTo==""){    
      document.getElementById('sn').innerHTML = "*Please fill the SendNoticeTo field ?";    
    return false; 
   }
      
   
    if(subject==""){   
        document.getElementById('s').innerHTML = "*Please fill the subject field ?";   
    return false;
   }
   
      
   
   
    if(notice==""){    
     document.getElementById('n').innerHTML = "*Please fill the notice field ?";    
     return false;    
   }
    
   
   
   
  const xhttp = new XMLHttpRequest();    
  xhttp.open('POST', '../controller/noticeCheck.php', true);   
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");   
  xhttp.onreadystatechange = function(){    
     if(this.readyState == 4 && this.status == 200){
   
   //document.getElementById('txtHint').innerHTML=this.responseText;
      
    if(this.responseText == "success"){   
    location="../controller/noticeCheck.php";    
    }else{    
    if(this.responseText == "missingInfo"){    
    var result = this.responseText;    
    document.getElementById('txtHint').innerHTML=result.fontcolor('red');
   
         }   
       }    
     }    
   }
   
   xhttp.send('sendNoticeTo='+sendNoticeTo+'&subject='+subject+'&notice='+notice+'&submit='+submit);

}