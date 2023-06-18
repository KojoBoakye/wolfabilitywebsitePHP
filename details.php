
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style3.css" rel="stylesheet">
    <title>WolfAbility</title>
</head>
<body>
<?php 

include "header.php";
include './partials/connect.php';
?>



    <?php 

    $id = $_GET['detailsid'];
 

    $sql = " SELECT * FROM `GymWear` Where Gymwear_ID=$id";
 $result = mysqli_query($con,$sql);
  

 $row=mysqli_fetch_assoc($result);
     $gymwearid = $row["Gymwear_ID"];
     $gymwearname = $row["Gymwear_Name"];
     $gymweardesc = $row["Gymwear_Description"];
     $gymwearprice = $row["Gymwear_Price"];
     $gymwearimg = $row["Gymwear_Image"];
   
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
     </head>
     <body>

     <h1><?php echo $gymwearname ?></h1>
     <div class="container">
        <div class="left">
         <img src="<?php echo $gymwearimg?>">
        </div>

        <div class="right">
       <p><?php echo $gymweardesc ?></p>
       <h2>&#x20B5;<?php echo $gymwearprice?> </h2>
       <button>Add to cart</button>
        </div>
     </div>
        
     </body>
     </html>


  
 
     
 


  
</body>
</html>