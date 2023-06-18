<!DOCTYPE html>
<html lang="en">
<head>
 
    
     <link href="style2.css" rel="stylesheet">
    <title>WolfAbility</title>
    
<body>


<?php include './partials/connect.php';
      include 'header.php';
      
 
?>
 
  


<h1 class="texta">Game-changing workout clothing, running clothes and loungewear essentials.<br>It’s not just in the designs.<br> It’s in the people who wear them.</h1>
    


<h2 class="text-sec">Our Range</h2>

<div class="container">
<?php 
 $sql = " SELECT * FROM `GymWear` ";
 $result = mysqli_query($con,$sql);
  
  
   

 while($row=mysqli_fetch_assoc($result)){
     $gymwearid = $row["Gymwear_ID"];
     $gymwearname = $row["Gymwear_Name"];
     $gymweardesc = $row["Gymwear_Description"];
     $gymwearprice = $row["Gymwear_Price"];
     $gymwearimg = $row["Gymwear_Image"];
   

     $gymweardesc = substr($gymweardesc, 0, 95);

     echo " 
     
     <div class='card'>
     <img src='$gymwearimg' class='card-img-top' alt=''>
     <div class='card-body'>
       <h5 class='card-title'>$gymwearname</h5>
       <p class='card-text'>$gymweardesc...<br><a href='details.php?detailsid=$gymwearid' class='btn1 btn-primary'>read more</a></p>

       <h6> &#x20B5; $gymwearprice </h6>
       <a href='details.php?detailsid=$gymwearid' class='btn btn-primary'>Shop</a></div> 
       </div>" ;
       
     
 }
     


?>


</div>

 
</div>

 
 
</body>
</html>