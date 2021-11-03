<?php
require '../Data/ProductControler.php';
ProductControl::getInstance()->getAllGradovi();
$result=ProductControl::getInstance()->res;
?>

<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script src="main.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="buttonStyle.css">
<link rel="stylesheet" href="products.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="body">
<div id="Section1">
    <button class="button addDugme" id="ButtonFunc" >Add</button>
    <button class="button deleteDugme" id="ButtonFunc" >Delete</button>
    <button class="button updateDugme" id="ButtonFunc" >Update</button>
</div>
<div id="Section2">
<div id="Content">
<?php if($result!=null) while($r=$result->fetch_array()):?>
    <div class="card mx-auto col-md-3 col-10 mt-5"> 
        <img class='mx-auto img-thumbnail' src="istockphoto-1272766574-170667a.jpg" width="auto" height="auto" />
        
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h5 class="card-title font-weight-bold" id="TitleText"><?php echo $r['Ime'];  ?> </h5>

                <p class="card-text"><?php echo $r['Cena'];  echo "$"; ?> </p>
               
                <div id="Button">
          
                <a href="#" class="btn cart px-auto">ADD TO CART</a>

                </div>
            </div>
        </div>
    </div>
    <br>
<?php endwhile; ?>
</div>
</div>
</div>
</div>

</body>
</html>