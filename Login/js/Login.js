$(document).ready(function(){


$("#LoginForm").submit(function(e){
    e.preventDefault();
    const $form = $(this);
    
    const $inputs = $form.find('input, select, button, textarea');
    const serijalizacija = $form.serialize();
  
    
    req=$.ajax({
        url: 'Login.php',
        type: 'POST',
        data:serijalizacija,
       
    });
  
   req.done(function(res,textStatus,responseXML){
        if(res!=-1){

window.location.replace("http://localhost/ItehDomaci/Domaci1/MainScreen/main.php")
        }else{
                alert("Not found");
                    }
   });
    
});
});