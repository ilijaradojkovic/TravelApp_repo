<?php
require '../Data/ProductControler.php';
$productContorl=ProductControl::getInstance();
$productContorl->getAllGradovi();
$productContorl->getAllDrzave();
$result=$productContorl->res;
$drzave=$productContorl->drzave;
?>

<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script src="main.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../dialog/style.css">
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
  
</div>
<div class="bcg"></div>
<div id="parentContainer">

<div class="Container">
            
            <div id="Section1D">
                <form id="form">
                    <input id="text-field" name="Ime" type="text" class="form-control ime" placeholder="Ime" required>
                    <input id="text-field" name="Cena" type="number" class="form-control cena"  placeholder="Cena" required>
                    <select class="combobox" name="Drzave" id="text-field">
                    <?php while($r=$drzave->fetch_array()):?>
                        
                        <option  value=<?php echo $r['DrzavaID']; ?>><?php echo $r['Ime'];?></option>


                    <?php endwhile;?>
                    </select>
                </form>
            </div>
            <div id="Section2D">
                <button class="button save" onclick="Resolve()" id="ButtonFunc"  type="submit">Save</button>
                
                <button class="button close" id="ButtonFunc" >Close</button>

            </div>
</div>
</div>

<div id="Section2">
    <div id="Content">
    
<?php if($result!=null) while($r=$result->fetch_array()):?>
    <div class="card mx-auto col-md-3 col-10 mt-5"> 
        <img class='mx-auto img-thumbnail' src="istockphoto-1272766574-170667a.jpg" width="auto" height="auto" />
        
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h5 class="card-title font-weight-bold" id="TitleText"><?php echo ($r['ImeDrzave']);  echo(" ,"); echo $r['ImeGrada']; ?> </h5>

                <p class="card-text"><?php echo $r['Cena'];  echo "$"; ?> </p>
               
                <br>
                <div id="Buttons">
                <button class="button deleteDugme"  id="ButtonFunc" onclick="DeleteClicked('<?php echo($r['GradID']);?>');" >Delete</button>
                    <button class="button updateDugme" id="ButtonFunc"  onclick="UpdateClicked('<?php echo($r['GradID']);?>','<?php  echo($r['ImeGrada'])?>','<?php  echo($r['Cena'])?>','<?php  echo($r['DrzavaID'])?>')">Update</button>

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
<script>

</script>

</body>
</html>