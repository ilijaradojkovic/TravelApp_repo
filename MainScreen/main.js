var idPromene=0;
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
function UpdateClicked(id,ime,cena,idDrzave){
    console.log("update");
    $(".ime").val(ime);
    $(".cena").val(cena);
    $(".combobox").get(0).selectedIndex = idDrzave-1;
    $(".save").addClass("UpdateMe");
    idPromene=id;
    
    showDialog();
 
   
}
function Resolve(){
  
    
    if ($(".save").hasClass("UpdateMe")) {
        UpdateItem();
      }
      else{
          AddItem();
      }
}
function UpdateItem(){
    const $form = $("#form");
    
    const $inputs = $form.find('input, select, button, textarea');
    const serijalizacija = $form.serialize() + "&id="+idPromene ;
    //ovo je dialog save dugme on radi add ali hocemo da namestimo da radi add ili update
 
    req=$.ajax({
        url: 'UpdateGrad.php',
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
}
function AddItem(){
    const $form = $("#form");
    
    const $inputs = $form.find('input, select, button, textarea');
    const serijalizacija = $form.serialize();
    //ovo je dialog save dugme on radi add ali hocemo da namestimo da radi add ili update
    
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
    
    
}

$(document).ready(function(){

    $(".UpdateMe").click(function(){

        console.log("c");
    });
  
 
    $(".addDugme").click(function(){
       
      
       
        console.log("add");
        $(".save").addClass("AddMe");
        showDialog();
       
    });
   
 

 

    $(".close").click(function(){ 
        $(".ime").val("");
        $(".cena").val(0);
        $(".combobox").get(0).selectedIndex = 0;  

        CloseDialog();
    });
 
  
   
});
function showDialog(){
       
    $(".Container").addClass("active");
  $(".bcg").addClass("active");
 }
 function CloseDialog(){
        
    $(".Container").removeClass("active");
  $(".bcg").removeClass("active");
  $(".save").removeClass("UpdateMe");
  $(".save").removeClass("UpdateMe");

 }

/* */