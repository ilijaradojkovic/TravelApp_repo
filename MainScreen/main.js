
$(document).ready(function(){
    $(".addDugme").click(function(){
        showDialog();
       
    });
    $(".deleteDugme").click(function(){
    
        console.log("delete");
    });
    $(".updateDugme").click(function(){
    
        console.log("update");
    });

    $(".save").click(function(){
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
