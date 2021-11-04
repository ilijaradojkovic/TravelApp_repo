
function DeleteClicked(id) {

    req=$.ajax({
        url: 'DeleteGrad.php',
        type: 'POST',
        data:{'id':id},
       
    });
    req.done(function(r){
         if(r==1){
            location.reload(true);
         }
         else alert("Greska u brisanju");
    })
}
$(document).ready(function(){

  
    $(".addDugme").click(function(){
        showDialog();
       
    });
    $(".updateDugme").click(function(){
    
        console.log("update");
    });

    $(".save").click(function(){
       
        const $form = $("#form");
        
        const $inputs = $form.find('input, select, button, textarea');
        const serijalizacija = $form.serialize();
      
        console.log(serijalizacija);
        req=$.ajax({
            url: 'SaveGrad.php',
            type: 'POST',
            data:serijalizacija,
           
        });
        req.done(function(r){
                if(r==1) {
                    
                    CloseDialog();
                    location.reload(true);
                }
                else alert("Greska");
        })
        console.log("save clicked");
    })
    $(".close").click(function(){   

        CloseDialog();
    });
    function showDialog(){
       
       $(".Container").addClass("active");
     $(".bcg").addClass("active");
    }
    function CloseDialog(){
        
        $(".Container").removeClass("active");
      $(".bcg").removeClass("active");
     }
});
